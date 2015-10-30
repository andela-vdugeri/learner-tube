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

	private $repository;

	/**
	 * @param UserRepository $repository
	 */
    public function __construct(UserRepository $repository)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
		$this->repository = $repository;
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
		$user = Auth::user();
		return view('auth.register', compact('user'));
	}


	public function getLogin()
	{
		$user = Auth::user();
		return view('auth.login', compact('user'));
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

		$this->create($request->all());
		Auth::attempt($request->only('email', 'password'));

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
		$authUser = $this->repository->findBySocialIdOrCreate($user);

		Auth::login($authUser, true);

		return redirect()->route('dashboard');
	}




}
