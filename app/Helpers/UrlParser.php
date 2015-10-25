<?php
/**
 * Created by PhpStorm.
 * @author: Verem Dugeri
 * Date: 10/24/15
 * Time: 10:57 AM
 *
 * Parse Youtube urls, returning only the video id.
 */

namespace Tubr\Helpers;


class UrlParser {


	 /**
	 * @param $url
	 * @return mixed
	 */
	 public function parseUrl($url)
	 {
		$url = explode('=', $url);
		return end($url);
	 }
}