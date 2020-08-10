<?php
namespace App\Repositories\UserLevel;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\UserLevelModel;
use App\Models\UserModel;
use App\Models\LevelModel;
use App\Models\VoucherModel;
use App\Models\PaymentModel;
use App\Repositories\Notification\NotificationEloquentRepository;

class UserLevelEloquentRepository extends EloquentRepository implements UserLevelRepositoryInterface
{
    protected $NotificationRepository;
    /**
     * get model
     * @return string
     */
    public function __construct(NotificationEloquentRepository $NotificationRepository)
    {
        $this->NotificationRepository = $NotificationRepository;
    }
    public function getModel()
    {
        return \App\Models\UserLevelModel::class;
    }
    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished()
    {
        $result = $this->_model->where('is_published', 1)->get();

        return $result;
    }

    /**
     * Get post only published
     * @param $id int Post ID
     * @return mixed
     */
    public function findOnlyPublished($id)
    {
        $result = $this
            ->_model
            ->where('id', $id)
            ->where('is_published', 1)
            ->first();

        return $result;
    }
    public function upgradeUserLevel($user_id, $level) {
        $userLevel = UserLevelModel::where('user_id', $user_id)->with('level')->first();
        if($userLevel) {
            if($userLevel->level->level_packge != $level->level_packge) {
                // khác cấp (tự động reset hạn mức mới)
                if($userLevel->level->level_packge > $level->level_packge)
                    return ['success' => false, 'msg' => 'Gói hiện tại của bạn cao hơn gói vừa chọn'];
                $userLevel->level_expried = strtotime($level->level_time_expried);
            }else{
                // cùng cấp
                if($userLevel->level_expried > time()) {
                    // thêm gia hạn đã có (thêm hạn mức với hạn mức cũ)
                    $userLevel->level_expried = strtotime($level->level_time_expried, $userLevel->level_expried);
                }else{
                    // bắt đầu gia hạn mới (hiện tại + hạn mức cấp cho)
                    $userLevel->level_expried = strtotime($level->level_time_expried);
                }
            }
            $userLevel->level_id = $level->level_id;
            $userLevel->save();
        }else{
            $userLevel = UserLevelModel::create([
                'user_id' => $user_id,
                'level_id' => $level->level_id,
                'level_expried' => strtotime($level->level_time_expried),
                'level_note' => 'Admin cung cấp',
                'level_status' => 1,
            ]);
        }
        return ['success' => true, 'msg' => 'thành công'];
    }
    public function upgradeUserLevel_v2($user_id, $level_id, $voucher_id, $note, $user_by_id = 0, $request_api_id = null) {
        $user = UserModel::find($user_id);
        if(!$user) {
            return [
                'msg' => 'User không tồn tại',
                'success' => false
            ];
        }
        $userLevel = UserLevelModel::where('user_id', $user_id)->with('level')->first();
        if($userLevel && $userLevel->level_expried > time()) {
            return [
                'msg' => 'Hiện tại bạn vẫn còn thời hạn VIP',
                'success' => false
            ];
        }
        $payment = [
            'user_id' => $user->user_id,
            'user_by_id' => $user_by_id,
            'level_id' => null,
            'voucher_id' => null,
            'cen_add' => 0,
            'level_cen' => 0,
            'level_money' => 0,
            'level_money_promo' => 0,
            'status' => 'SUCCESS',
            'request_from' => 'ADMIN',
            'cen_current_user' => $user->user_money,
            'note' => $note,
            'request_api_id' => $request_api_id,
        ];
        $level = [];
        if($level_id) {
            $level = LevelModel::where('level_id', $level_id)->where('level_status', 1)->first();
            if(!$level) {
                return [
                    'msg' => 'Không tìm thấy gói level',
                    'success' => false
                ];
            }
            $payment['level_id'] = $level->level_id;
            $payment['level_cen'] = $level->level_cen;
            $payment['level_money'] = $level->level_money;
            $payment['level_money_promo'] = $level->level_money_promo;
            $payment['level_money_promo_status'] = $level->level_money_promo_status;

            $payment['pay_money_value'] = $level->level_money;
            if($level->level_money_promo_status) {
                $payment['pay_money_value'] = $level->level_money_promo;
            }

            $payment['time_add_expired'] = $level->level_time_expired;
        }else{
            $voucher = VoucherModel::where('voucher_id', $voucher_id)->where('voucher_status', 1)->with('levelEnableRow')->first();
            if(!$voucher) {
                return [
                    'msg' => 'Không tìm thấy voucher',
                    'success' => false
                ];
            }
            $payment['voucher_id'] = $voucher->voucher_id;
            $payment['cen_add'] = $voucher->gift_value_cen;
            if(isset($voucher->levelEnableRow)) {
                $level = $voucher->levelEnableRow;
                $payment['level_id'] = $voucher->levelEnableRow->level_id;
                $payment['time_add_expired'] = $voucher->levelEnableRow->level_time_expired;
                $payment['level_cen'] = $voucher->levelEnableRow->level_cen;
                $payment['level_money'] = $voucher->levelEnableRow->level_money;
                $payment['level_money_promo'] = $voucher->levelEnableRow->level_money_promo;

                $payment['pay_money_value'] = $voucher->voucher_pay_cen;

                $payment['level_money_promo_status'] = $voucher->levelEnableRow->level_money_promo_status;
            }

        }
        if($level) {
            if($userLevel) {
                if($userLevel->level->level_packge != $level->level_packge) {
                    if($userLevel->level->level_packge > $level->level_packge) {
                        return [
                            'msg' => 'Gói hiện tại của bạn cao hơn gói vừa chọn',
                            'success' => false
                        ];
                    }
                    // khác cấp (tự động reset hạn mức mới)
                    $userLevel->level_expried = strtotime($level->level_time_expired);
//                    $user->vip_time_exprited = strtotime($level->level_time_expired);
                }else{
                    // cùng cấp
                    if($userLevel->level_expried > time()) {
                        // thêm gia hạn đã có (thêm hạn mức với hạn mức cũ)
                        $userLevel->level_expried = strtotime($level->level_time_expired, $userLevel->level_expried);
//                        $user->vip_time_exprited = strtotime($level->level_time_expired, $userLevel->level_expried);
                    }else{
                        // bắt đầu gia hạn mới (hiện tại + hạn mức cấp cho)
                        $userLevel->level_expried = strtotime($level->level_time_expired);
//                        $user->vip_time_exprited = strtotime($level->level_time_expired);
                    }
                }
                $userLevel->level_id = $level->level_id;
                $user->vip_level = $level->level_packge;
                $user->vip_time_exprited = $userLevel->level_expried;
                $userLevel->save();
                $user->save();
            }else{
                $userLevel = UserLevelModel::create([
                    'user_id' => $user_id,
                    'level_id' => $level->level_id,
                    'level_expried' => strtotime($level->level_time_expired),
                    'note' => $note,
                    'level_status' => 1,
                ]);
                $user->vip_level = $level->level_packge;
                $user->vip_time_exprited = strtotime($level->level_time_expired);
                $user->save();
            }
        }
        $payment = PaymentModel::create($payment);
        $this->NotificationRepository->pushNotif($user->id, $payment->id, 'up_vip', 'Tài khoản bạn đã được nâng VIP ' . $level->level_name, '/user/'.$user_id.'?tab=notify');
        if($payment['cen_add'] > 0) {
            $user->user_money = $user->user_money + $payment['cen_add'];
            $user->save();
        }
        return [
            'msg' => 'Nâng cấp user thành công',
            'success' => true
        ];
    }
}

