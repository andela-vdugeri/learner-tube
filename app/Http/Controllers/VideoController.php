<?php

namespace App\Http\Controllers;

use App\Category;
use app\Helpers\UrlParser;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
		$user = Auth::user();
		$categories = Category::all();
		return view('dashboard', compact('videos', 'user', 'categories'));
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
	 * @param Request $request
	 * @param Video $video
	 * @param UrlParser $parser
	 * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|
	 * \Symfony\Component\HttpFoundation\Response
	 */
    public function store(Request $request, Video $video, UrlParser $parser)
    {
		if ($request->ajax()) {
			$user = Auth::user();

			//parse the video url
			$url = $parser->parseUrl($request->get('videoUrl'));
			//create the resource
			$video->title       = $request->get('title');
			$video->url         = $url;
			$video->description = $request->get('description');
			$video->category_id = $request->get('videoCategory');
			$video->user_id     = $user->id;

			$video->save();

			return response(json_encode($request->all()));
		}

		return redirect()->action('HomeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = Auth::check();
		$categories = Category::all();
		$video = Video::find($id);
        return view('videos.show', compact('user', 'video', 'categories'));
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
