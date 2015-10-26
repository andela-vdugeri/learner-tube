<?php
/**
 * Created by PhpStorm.
 * User: andela
 * Date: 10/23/15
 * Time: 3:17 PM
 */

namespace Tubr\Helpers;


class UploadImage {

	 /**
	 * @var UrlShortener $shortener
	 */
	 private $shortener;

	 /**
	 * @var Uploader $uploader
	 */
	 private $uploader;

	/**
	 * @var string $shortUrl
	 */
	 private $shortUrl;

	 /**
	 * Construct a class instance
	 *
	 * @param Uploader $uploader
	 * @param UrlShortener $shortener
	 */
	 public function __construct(Uploader $uploader, UrlShortener $shortener)
	 {
		$this->uploader = $uploader;
		$this->shortener = $shortener;
	 }

	 /**
	 * Initialize configurations for bitly url shortening service
	 */
	 public function initBitly()
	 {
		$this->shortener->setLogin(env('BITLY_LOGIN'));
		$this->shortener->setKey(env('BITLY_API_KEY'));
		$this->shortener->setFormat('json');
	 }


	 /**
	 * Upload image
	 * @param $image
	 */
	 public function uploadImage($image)
	 {
		if (! is_null($image)) {
			$result = $this->uploader->uploadFile($image);
			$longUrl = $result['url'];

			//initialize bitly
			$this->initBitly();

			//shorten url
			$this->shortUrl = $this->shortener->shortenUrl($longUrl);

		}
	 }


	 /**
	 * Return shortened url
	 * @return string
	 */
	 public function getShortUrl()
	 {
		return $this->shortUrl;
	 }

}