<?php
/**
 * Created by PhpStorm.
 * @author: Verem Dugeri
 * Date: 10/28/15
 * Time: 10:53 AM
 */

namespace Tubr\Repositories;

use DB;
use Carbon\Carbon;
use Tubr\Category;

class CategoriesRepository
{


	 /**
	 * @param $categoryId
	 * @return mixed
	 */
	 public function findNewVideos($categoryId)
	 {
		$category = Category::find($categoryId);

		return $this->getRecentVideos($category);
	 }

	public function getRecentVideos($category)
	{
		$newlyCreated = Carbon::now()->subDays(2);
		return DB::table('videos')
		  ->where('category_id', '=', $category->id)
		  ->where('created_at', '>=',$newlyCreated )
		  ->count();
	}

	public function countVideos($categoryId)
	{
		return DB::table('videos')
		  ->where('category_id', '=', $categoryId)->count();
	}
}