<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)){
            if(Auth::check()){
                if(Auth::user()->role == "admin"){
                    if($request->hasSession()){
                        $request->session()->put("auth.passworrd_confirmed_at", time());

                        return redirect()->intended(route('admin.index'));
                    }
                }elseif(Auth::user()->role == "petugas"){
                    if($request->hasSession()){
                        $request->session()->put("auth.passworrd_confirmed_at", time());

                        return redirect()->intended(route('spp.entry'));
                    }
                }elseif(Auth::user()->role == "siswa"){
                    if($request->hasSession()){
                        $request->session()->put("auth.passworrd_confirmed_at", time());

                        return redirect()->intended(route('student.index'));
                    }
                }
            }
            return $this->sendFailedLoginResponse($request);
        }
    }
}
