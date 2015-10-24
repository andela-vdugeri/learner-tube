<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 10/24/15
 * Time: 10:57 AM
 */

namespace app\Helpers;


class UrlParser {



	public function parseUrl($url)
	{
		$url = explode('=', $url);
		return end($url);
	}
}