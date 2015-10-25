<?php

namespace Tubr\Http\Controllers;

use Tubr\Helpers\UploadImage;
use Tubr\Repositories\UserRepository;
use Illuminate\Http\Request;
use Tubr\Http\Requests;
use Tubr\Http\Controllers\Controller;
use Tubr\User;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
		$url = "";
		$user = User::find($id);

		if ($request['file']) {
			//upload file
			$file = $request['file'];

			$uploader->uploadImage($file);
			$url = $uploader->getShortUrl();
		}

		$user->email        = $request->get('email');
		$user->name        = $request->get('name');
		$user->password    = bcrypt($request->get('password'));
		$user->about        = $request->get('about');
		$user->avatar_url   = $url;

		$user->save();


		return redirect()->action('HomeController@index');
    }
}
