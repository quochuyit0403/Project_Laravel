<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.users.login', [
            'title' => "Dang nhap he thong"
        ]);
    }

    public function travel(Request $request) {
        // Lay cac gia tri input va token ra
        // dd($request->input());

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('admin');
        }
        Session()->flash('error', 'Email hoặc mật khẩu không đúng');
        return redirect()->back();
    }
}
