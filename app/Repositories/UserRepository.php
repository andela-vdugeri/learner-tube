<?php
/**
 * Created by PhpStorm.
 * @user : Verem Dugeri
 * Date: 10/21/15
 * Time: 5:37 PM
 */

namespace App\Repositories;



use App\User;

class UserRepository {


	/**
	 * @var User $user
	 */
	private $user;

	/**
	 * Construct the user Repository instance
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Get the user avatar
	 *
	 * @return string
	 */
	public function getAvatarUrl($user)
	{
		return "http://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email))) . "?d=mm&s=140";
	}


	public function findByUsernameOrCreate($userData)
	{
		return User::firstOrCreate([
			'email' => $userData->email,
			'name' => $userData->nickname? $userData->nickname : $userData->name ,
			'password' => 'password'
		]);
	}
}