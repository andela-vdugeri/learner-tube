<?php

namespace Tubr\Http\Controllers;

use Tubr\Category;
use Tubr\Http\Requests;
use Illuminate\Http\Request;
use Tubr\Http\Controllers\Controller;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $categories = Category::all();
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
		return view('videos.category');
     }


	 /**
	 * @param Request $request
	 */
     public function store(Request $request)
     {

        $name = $request->get('category');

		$category = new Category();
		$category->name = $name;

		$category->save();

		 return redirect('HomeController@index')->with('info', 'Category created');
     }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
        $category = Category::find($id);
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

		return view('videos.edit-category', compact($category));
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
