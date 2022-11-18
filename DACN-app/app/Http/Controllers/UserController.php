<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\Crete;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $name = $request->input('ho_ten');
        $email = $request->input('email');
        $usernames = $request->input('tai_khoan');
        $password = $request->input('password');
        $confirm = $request->input('confirm_pass');

        $user_new = (object)[];
        $user_new->email = $email;
        $user_new->usernames = $usernames;
        $user_new->password = $password;
        $user_new->confirm = $confirm;

        DB::transaction(function () use ($usernames, $password, $email, $name) {
            DB::table('bs_thanh_vien')->insert([
                'ho_ten' => $name,
                'tai_khoan' => $usernames,
                'password' => $password,
                'email' => $email,
            ]);
            usleep(10000);
        });
        $data_string_user = file_get_contents(resource_path('data_temp/users.json'));
        $list_user = json_decode($data_string_user);
        $list_user[] = $user_new;
        file_put_contents(resource_path('data_temp/users.json'), json_encode($list_user));

        Session::put('user_info', $user_new);

        return view('redirect_page')
            ->with('message_notice', "Đăng ký thành công!!")
            ->with('type_notice', 'success')
            ->with('url_redirect', '/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request)
    {
        Session::forget('user_info');

        return redirect($request->server('HTTP_REFERER'), 302);
    }
}
