<?php
/**
 * Created by PhpStorm.
 * @user : Verem Dugeri
 * Date: 10/21/15
 * Time: 5:37 PM
 */

namespace Tubr\Repositories;



use Tubr\User;

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
		$userAvatar =  "http://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email))) . "?d=mm&s=140";

		//save avatar to database
		$user->avatar_url = $userAvatar;
		$user->save();

		return $userAvatar;

	 }

	 /**
	 * @param $userData
	 * @return static
	 */
	 public function findByUsernameOrCreate($userData)
	 {

		$user = User::firstOrCreate([
			'email' => $userData->email,
			'name' => $userData->nickname? $userData->nickname : $userData->name ,
			'password' => bcrypt('password')
		]);

		return $user;
	 }

	public function findBySocialIdOrCreate($user)
	{
		$authUser = User::firstOrNew(['social_id' => $user->id]);
		if (! is_null($authUser->id)) {
			return $authUser;
		}

		$authUser->name 		= ($user->name)? $user->name : $user->nickname;
		$authUser->email 		= ($user->email)? $user->email: "";
		$authUser->password 	= bcrypt($user->id);
		$authUser->social_id 	= $user->id;
		$authUser->avatar_url		= $user->avatar;

		$authUser->save();

		return $authUser;

	}
}