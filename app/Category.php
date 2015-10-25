<?php

namespace Tubr;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	protected  $fillable = ['name'];


	public function video()
	{
		return $this->hasMany('Verem\Tube\Video');
	}
}
