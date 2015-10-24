<?php

namespace app\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Repositories\UserRepository;
use App\Video;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
