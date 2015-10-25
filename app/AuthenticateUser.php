<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 10/22/15
 * Time: 1:01 PM
 */

namespace Tubr;

use Tubr\Repositories\UserRepository;
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

	public function execute($hasCode, $listener, $provider)
	{

		if(! $hasCode) {

			return $this->getAuthorization($provider);
		}


		//$user = $this->users->findByUsernameOrCreate($this->getUser($provider));
		$user = $this->getUser($provider);

		//$this->auth->login($user, true);

		return $listener->userAuthenticated($user);
	}


	public function getAuthorization($provider)
	{
		return $this->socialite->driver($provider)->redirect();
	}

	public function getUser($provider)
	{
		return $this->socialite->driver($provider)->user();
	}
}