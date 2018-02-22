<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;



class loginControllerEth extends Controller
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
    protected $JsonToken;

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
            'ethid' => 'required',     
        ]);
	

	 $user = User::where('ethid', $request->get('ethid'))->first();



	try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::fromUser($user)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }


	    // if no errors are encountered we can return a JWT
        $token = JWTAuth::fromUser($user);
	
	$name = "token";
	$value = $token;
	$expire = time() + 60;
	setcookie($name, $value, $expire,  "/");
	
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
