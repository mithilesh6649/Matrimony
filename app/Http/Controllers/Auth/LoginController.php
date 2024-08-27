<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class   LoginController extends Controller
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }


    public function otpLogin()
    {
        return view('auth.otp-login');
    }

    public function otpLoginSendMsg(Request $request)
    {
        $validated = $request->validate([
            'mobile_number' => [
                'required',
                'string',
                'max:255',
                'regex:/^[0-9\-\+]{7,15}$/',
                'exists:users,mobile_number', // Check if the mobile number exists in the users table
            ],
        ]);


        //Send OTP Code.........

        $code = '1234';

        return redirect()->route('otp.verify');
    }


    public function otpVerify()
    {
        return view('auth.otp-verify');
    }
}
