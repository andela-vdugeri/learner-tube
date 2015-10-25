<?php

namespace Tubr;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{


	protected $fillable = [
		'title',
		'description',
		'url',
		'category_id',
		'user_id'
	];



	public function owner()
	{
		return $this->belongsTo('Tubr\User');
	}

	public function category()
	{
		return $this->belongsTo('Tubr\Category');
	}
}
