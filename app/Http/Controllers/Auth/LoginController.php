<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt(['email'=>$input["email"], 'password'=>$input["password"]]))
        {
            if(auth()->user()->role == 'Super Admin')
            {
                return redirect()->route('dashboard.sa');
            }
            else if(auth()->user()->role == 'Viewer')
            {
                return redirect()->route('dashboard.viewer');
            }
            else if(auth()->user()->role == 'Admin')
            {
                return redirect()->route('dashboard.admin');
            }
            else if(auth()->user()->role == 'Masyarakat')
            {
                return redirect()->route('dashboard.user');
            }
            else if(auth()->user()->role == 'Observer')
            {
                return redirect()->route('pencatatan-agromet');
            }
            else
            {
                return redirect()->route('/');
            }
        }
        else
        {
            return redirect()->route("login")->with("error",'Kesalahan Email atau Password');
        }
    }
}
