<?php

namespace Tubr\Http\Controllers;

use Tubr\Video;
use Tubr\Category;
use Tubr\Http\Requests;
use Tubr\Helpers\UrlParser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tubr\Http\Controllers\Controller;

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

		return view('videos.all', compact('videos', 'user', 'categories'));
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

		$user = Auth::user();

		$url = $parser->parseUrl($request->get('url'));

		$video->title       = $request->get('title');
		$video->url         = $url;
		$video->description = $request->get('description');
		$video->category_id = $request->get('category');
		$video->user_id     = $user->id;

		$video->save();

		return redirect()->action('HomeController@index')->with('info', 'Video uploaded successfully');
     }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
		$user = Auth::user();
		$categories = Category::all();
		$video = Video::find($id);

        return view('videos.show', compact('user', 'video', 'categories'));
     }
	
}
