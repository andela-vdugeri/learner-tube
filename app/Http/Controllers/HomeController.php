<?php

namespace Tubr\Http\Controllers;

use Tubr\Category;
use Tubr\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Tubr\Repositories\UserRepository;
use Tubr\Http\Controllers\Controller;

class HomeController extends Controller
{
     /**
     * @param UserRepository $repo
     * @return \Illuminate\View\View
     */
     public function index(UserRepository $repo)
     {
         $user = Auth::user();

        //get all categories

        $categories = Category::all();
         return view('users.dashboard', compact('repo', 'user', 'categories'));
     }

}
