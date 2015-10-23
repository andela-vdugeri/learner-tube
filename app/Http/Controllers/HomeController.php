<?php

namespace app\Http\Controllers;

use App\Category;
use app\Helpers\UploadImage;
use App\Repositories\UserRepository;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoFormRequest;
use Illuminate\Support\Facades\Input;

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
         return view('dashboard', compact('repo', 'user', 'categories'));
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
     public function store(Request $request, Video $video)
     {
         //retrieve the authenticated user

        if ($request->ajax()) {
            $user = Auth::user();


            //create the resource
            $video->title       = $request->get('title');
            $video->url         = $request->get('videoUrl');
            $video->description = $request->get('description');
            $video->category_id = $request->get('videoCategory');
            $video->user_id        = $user->id;

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
         //
     }

    /**
     * @param $id
     * @param UserRepository $repo
     * @return \Illuminate\View\View
     */
     public function edit($id, UserRepository $repo)
     {
         $user = User::find($id);

         return view('edit-profile', compact('user', 'repo'));
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
