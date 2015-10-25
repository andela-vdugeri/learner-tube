<?php
/**
 * Created by PhpStorm.
 * @author: Verem Dugeri
 * Date: 10/23/15
 * Time: 3:10 PM
 */

namespace Tubr\Helpers;

use Cloudder;

class Uploader
{
    /*
    * uploads a file to cloudinary using the clouder helper facade and returns
    * the result of the upload to the user or false if it fails;
    */
	public function uploadFile($file)
    {
        if (isset($file)) {
            Cloudder::upload($file);

            return Cloudder::getResult();
        } else {

            return false;
        }
    }
}
