<?php

/**
 * @author: Verem Dugeri
 *
 * The Video model
 */
namespace Tubr;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{


	 /**
	 * @var array
	 */
	 protected $fillable = [
		'title',
		'description',
		'url',
		'category_id',
		'user_id'
	 ];


	 /**
	 * Relationship between users and videos table
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	 public function owner()
	 {
		return $this->belongsTo('Tubr\User');
	 }

	 /**
	  *Relationship between video and categories table
	  *
	  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	  */
 	 public function category()
	 {
		return $this->belongsTo('Tubr\Category');
	 }
}
