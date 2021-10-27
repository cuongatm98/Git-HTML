<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        return view('backend.login.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin.layout.dashboard');
        }
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.showLogin');
    }
    public function showChangePassword()
    {
        return view('login.changePassword');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;

        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Sai mat khau hien tai']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->route('showFormLogin');

    }

    public function showFormResetPassword()
    {
        return view('resetPassword');
    }

    public function resetPassword(Request $request)
    {
        $user=User::where('email',$request->email)->first();
        $defaultPassword=Hash::make('123456');
        $user->password=$defaultPassword;
        $user->save();
        return redirect()->route('showFormLogin');
    }
}
