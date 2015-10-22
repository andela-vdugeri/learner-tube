<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoFormRequest;

class HomeController extends Controller
{
	/**
	 * @param UserRepository $repo
	 * @return \Illuminate\View\View
	 */
    public function index(UserRepository $repo)
    {
		$user = Auth::user();
        return view('dashboard', compact('repo', 'user'));
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
	 * @param VideoFormRequest $request
	 * @param Video $video
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(VideoFormRequest $request, Video $video)
    {
		//retrieve the authenticated user
		$user = Auth::user();
		//create the resource
		$video->title 		= $request->get('title');
		$video->url			= $request->get('url');
		$video->description = $request->get('description');
		$video->category_id = 1;
		$video->owner_id	= $user->id;

		$video->save();


		return redirect()->action('HomeController@index')->with($video);

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
