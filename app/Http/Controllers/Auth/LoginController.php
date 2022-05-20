<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Auth;

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

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (Auth::user()->hasRole('pet')) {
                return redirect('/search');
            } else if (Auth::user()->hasRole('vet')) {
                return redirect('vet/home');
            } else if (Auth::user()->hasRole('admin')) {
                return redirect('admin/home');
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->back()->with('error', 'Email-Address Or Password Are Wrong.');
        }
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    // Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('/home');
    }

    // Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    // Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('/home');
    }

    // apple login
    public function redirectToApple()
    {
        return Socialite::driver('apple')->stateless()->redirect();
    }
    // apple callback
    public function handleAppleCallback()
    {
        $user = Socialite::driver('apple')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('/home');
    }

    protected function _registerOrLoginUser($data)
    {
        dd($data);
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->first_name = $data->name;
            $user->last_name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
