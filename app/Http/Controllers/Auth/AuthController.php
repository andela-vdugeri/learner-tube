<?php

namespace Tubr\Http\Controllers\Auth;

use Tubr\AuthenticateUser;
use Tubr\Repositories\UserRepository;
use Tubr\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tubr\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


	protected $redirectPath = '/dashboard';
	protected $loginPath 	= '/login';

	/**
	 * Creates a new AuthController instance
	 *
	 */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

	public function getRegister()
	{
		return view('auth.register');
	}


	public function getLogin()
	{
		return view('auth.login');
	}

	public function postRegister(Request $request, UserRepository $repo)
	{

		$validation = Validator::make($request->all(), [
		  'email' 	=> 'required|unique:users|email|max:255',
		  'name'  	=> 'required|unique:users|max:255',
		  'password'=> 'required|confirmed|min:6'
		]);

		if($validation->fails()) {
			return redirect()->back()->withInput()->WithErrors($validation->errors());
		}
//		$this->validate($request, [
//		  'email' 	=> 'required|unique:users|email|max:255',
//		  'name'  	=> 'required|unique:users|max:255',
//		  'password'=> 'required|confirmed|min:6'
//		]);

		$this->create($request->all());
		Auth::attempt($request->only('email', 'password'));
		$user = Auth::user();
		$avatarUrl = $repo->getAvatarUrl($user);
		return redirect()
		  ->route('dashboard')
		  ->with('message','Your account has been created');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
		  'email' 	 => 'required|email',
		  'password' => 'required|min:6'
		]);

		$auth = Auth::attempt($request->only('email', 'password'),
		  $request->has('remember'));


		if (! $auth ) {
			return redirect()->back()->withInput()->with('message','Invalid user credentials');
		}

		return redirect('dashboard');
	}


	public function doSocial(AuthenticateUser $authenticate, Request $request, $provider = null)
	{
		return $authenticate->execute($request->has('code')|| $request->has('oauth_token'), $this, $provider) ;
	}

	public function userAuthenticated($user)
	{

		$email = $user->email;
		$name = $user->nickname ? $user->nickname : $user->name;

		return redirect('/register')->withInput(['email' =>$email, 'name' => $name]);
	}


}
