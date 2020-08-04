<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use App\Repositories\User\UserEloquentRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Models\MailTokenModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Http\JsonResponse;
use App\Repositories\RequestApiVip\RequestApiVipEloquentRepository;

class RequestPaymentVipController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $requestApiVip;

    public function __construct(RequestApiVipEloquentRepository $reqApiVip)
    {
        $this->requestApiVip = $reqApiVip;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveUpRequest(Request $request)
    {
        $this->requestApiVip->getModel()::create([
           'title' => $request->title,
           'code' => $request->code,
           'phone' => $request->phone,
           'note' => $request->note,
           'amount' => $request->amount,
           'time' => $request->time,
           'time_create' => time(),
        ]);
        return new JsonResponse(['message' => 'Success', 'code' => 200, 'data' => [], 'error' => []]);
    }
}
