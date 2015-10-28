<?php

namespace Tubr\Http\Controllers;

use Tubr\Video;
use Tubr\Category;
use Tubr\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Tubr\Http\Controllers\Controller;

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
		$videos 	= Video::all();
		$user 		= Auth::user();

		return view('welcome', compact('categories', 'videos', 'user'));
     }

	 /**
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	 public function categories($id)
	 {
		$videos = DB::table('videos')->where('category_id', $id)->get();
		$categories = Category::all();
		$user = Auth::user();

		return view('welcome', compact('videos', 'categories', 'user'));
	 }
}
