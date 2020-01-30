<?php

namespace Backpack\Base\app\Http\Controllers;
use App\Models\CommentModel;
use App\Models\UserModel;


class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(!backpack_user()->getAllPermissions()->all()) {
            abort(403, 'Bạn không có quyền truy cập, thoát ra ngay :((');
        }
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['comment_recent'] = CommentModel::where('comment_time', '>=', strtotime(date('Y/m/d', strtotime(TIME_1DAY_AGO)). ' 00:00'))->with('user')->orderBy('comment_time', 'desc')->limit(13)->get()->toArray();
        $this->data['user_register'] = UserModel::whereDate('created_at', date('Y/m/d', time()))->orderBy('created_at', 'desc')->get()->toArray();
        return view('backpack::dashboard', $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
