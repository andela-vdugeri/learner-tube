<?php

namespace Tubr\Http\Controllers;

use Tubr\Category;
use Tubr\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tubr\Http\Controllers\Controller;

class CategoryController extends Controller
{

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
		 $user = Auth::user();
		return view('videos.category', compact('user'));
     }


	 /**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
     public function store(Request $request)
     {
		 if (!(trim($request->get('name')) === "")) {
			 Category::firstOrCreate(['name' => $request['name']]);

			 return redirect('HomeController@index')->with('info', 'Category created');
		 }

		 return redirect()->back()->with('info','Please enter a valid category name' );
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
        $category = Category::find($id);
		$user = Auth::user();

		return view('videos.edit-category', compact('category', 'user'));
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
        $category = Category::find($id);
		$category->name = $request->get('name');

		$category->save();
     }
}
