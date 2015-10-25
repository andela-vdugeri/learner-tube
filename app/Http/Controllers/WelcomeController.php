<?php

namespace Tubr\Http\Controllers;

use Tubr\Category;
use Tubr\Video;
use Illuminate\Http\Request;
use Tubr\Http\Requests;
use Tubr\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
		$videos = Video::all();
		$user = Auth::check();

		return view('welcome', compact('categories', 'videos', 'user'));
    }

	public function categories($id)
	{
		$videos = DB::table('videos')->where('category_id', $id)->get();
		$categories = Category::all();
		$user = Auth::check();

		return view('welcome', compact('videos', 'categories', 'user'));
	}
}
