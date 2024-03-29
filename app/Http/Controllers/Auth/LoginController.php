<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;


use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;


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
    protected $redirectTo = '/';

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

      $this->validate($request,[
          'email' => 'required|email',
          'password' =>'required',
      ]);
      //Find user by this Email

      $user = User::where('email', $request->email)->first();

            //Login This User
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
             {
              //Log him Now
              return redirect()->intended(route('index'));
            }
            else{
                //If there is no account of user
                Session()->flash('sticky_error','Invalid Login');
                return back();
              }


              //send him a token
              if (!is_null($user))
              {
                $user->notify(new VerifyRegistration($user));
                Session()->flash('success','A new confirmation email has sent to you.. Please check and confirm your email ');
                return redirect('/');
              }
              else{
                //If there is no account of user
                Session()->flash('sticky_error','Please Login first!! ');
                return redirect()->route('login');
              }


        }





    }
