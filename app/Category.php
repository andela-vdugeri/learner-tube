<?php
/**
 * @author: Verem Dugeri
 *
 * Category model
 */
namespace Tubr;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	 /**
	 * @var array
	 */
	 protected  $fillable = ['name'];


	 /**
	 * Relationship between videos and categories table
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	 public function video()
	 {
		return $this->hasMany('Verem\Tube\Video');
	 }
}
