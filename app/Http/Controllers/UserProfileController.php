<?php

namespace Tubr\Http\Controllers;

use Tubr\User;
use Tubr\Http\Requests;
use Illuminate\Http\Request;
use Tubr\Helpers\UploadImage;
use Tubr\Repositories\UserRepository;
use Tubr\Http\Controllers\Controller;

class UserProfileController extends Controller
{


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id, UserRepository $repo)
     {
		$user = User::find($id);

		return view('users.edit-profile', compact('user', 'repo'));
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id, UploadImage $uploader)
     {

		$user = User::find($id);

		if ($request['file']) {
			$file = $request['file'];

			$uploader->uploadImage($file);
			$url = $uploader->getShortUrl();

			$user->avatar_url = $url;
		}

		if ($request['password']) {
			$user->password = bcrypt($request->get('password'));
		}

		$user->email        = $request->get('email');
		$user->name         = $request->get('name');
		$user->about        = $request->get('about');

		$user->save();

		return redirect()->action('HomeController@index');
     }
}
