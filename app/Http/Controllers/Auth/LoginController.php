<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VerifyForm;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest',['only'=>'showLogin']);
    }

    public function showLogin()
    {
        return view('Auth.login');
    }

    public function login(VerifyForm $request)
    {
        if(Auth::attempt(['name'=>$request->user,'password'=>$request->password,'flgstatus'=>1])){
            Auth::logoutOtherDevices($request->password);
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['usuario'=>trans('auth.failed')]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
