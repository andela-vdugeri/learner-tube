<?php

/**
 * Created by PhpStorm.
 * @author: Verem Dugeri
 * Date: 10/25/15
 * Time: 12:05 PM
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{

	/**
	 * Test the loading of the homepage
	 */
	public function testHomePageLoadsCorrectly()
	{
		$this->call('GET','/');

		$this->assertResponseOk();
	}

	/**
	 * See logo on page nav bar
	 */
	public function testHomePageHasLogo()
	{
		$this->visit('/')
		  ->see('Tubr');
	}

	/**
	 * See login link
	 */
	public function testHomePageHasLoginLink()
	{
		$this->visit('/')
		  ->seeLink('Login');
	}

	/**
	 * see Register link
	 */
	public function testHomePageHasRegisterLink()
	{
		$this->visit('/')
		  ->seeLink('Register');
	}

	/**
	 * see Logout link
	 */
	public function testLogoutLinkNotOnHomePage()
	{
		$this->visit('/')
		  ->dontSeeLink('Logout');
	}

	public function testVidoesAreOnHomePage()
	{
		$this->visit('/');

		$this->assertViewHas('videos');
	}

	public function testHomepageHasCategories()
	{
		$this->visit('/');
		$this->assertViewHas('categories');
	}
}
