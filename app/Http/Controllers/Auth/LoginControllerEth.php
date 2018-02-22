<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginControllerEth extends Controller
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
    }


    public function login(Request $request)
    {
        // Check validation
        $this->validate($request, [
            'ethAccount' => 'required',   /*|regex:/[0-9]{10}/|digits:10*/         
        ]);

        // Get user record
        $user = User::where('ethAccount', $request->get('ethAccount'))->first();

        // Check Condition ethAccountNum. Found or Not
        if($request->get('ethAccount') != $user->ethAccount) {
            \Session::put('errors', 'Your ethAccount number not match in our system..!!');
            return back();
        }        
        
        // Set Auth Details
        \Auth::login($user);
        
        // Redirect home page
        return redirect()->route('home');
    }



   public function showLoginForm()
    {
        return view('auth.ethlogin');
    }






}
