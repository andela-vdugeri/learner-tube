<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 10/22/15
 * Time: 1:01 PM
 */

namespace App;

use App\Repositories\UserRepository;
use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthenticateUser {


	/**
	 * @var UserRepository
	 */
	private $users;

	/**
	 * @var Socialite
	 */
	private $socialite;


	/**
	 * @var Guard
	 */
	private $auth;

	/**
	 * @param UserRepository $users
	 * @param Socialite $socialite
	 * @param Guard $auth
	 */
	public function __construct(UserRepository $users, Guard $auth,Socialite $socialite)
	{
		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;
	}

	public function execute($hasCode, $listener)
	{

		if(! $hasCode) {

			return $this->getAuthorization();
		}

		$user = $this->users->findByUsernameOrCreate($this->getUser());

		$this->auth->login($user, true);

		return $listener->userAuthenticated($user);
	}


	public function getAuthorization()
	{
		return $this->socialite->driver('github')->redirect();
	}

	public function getUser()
	{
		return $this->socialite->driver('github')->user();
	}
}