<?php

use Tubr\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

	public function testLoginPageLoadsCorrectly()
	{
		$this->call('GET', '/login');

		$this->assertResponseOk();
	}

	public function testLoginPageHasLogo()
	{
		$this->visit('/login')
			->see('Tubr');
	}

	public function testLoginPageHasNoLoginLink()
	{
		$this->visit('/login')
			->dontSeeLink('login');
	}

	public function testLoginPageHasNoLogoutLink()
	{
		$this->visit('/login')
			->dontSeeLink('/logout');
	}

	public function testPageHasFaceBookLogin()
	{
		$this->visit('/login')
			->see('facebook');
	}

	public function testPageHasTwitterLogin()
	{
		$this->visit('/login')
			->see('twitter');
	}

	public function testPageHasGithubLogin()
	{
		$this->visit('/login')
			->see('github');
	}

	/**
	 * Test if a user can log in to the system
	 *
	 * This test presumes that the user exists
	 */
	public function testLoginFormWorksCorrectly()
	{
		//create a user
		$this->createUser();

		$this->visit('/login')
			->type('john@doe.com','email')
			->type('password', 'password')
			->press('action')
			->seePageIs('/dashboard');
	}


	public function createUser()
	{
		User::create([
		  'name' => 'johndoe',
		  'email' => 'john@doe.com',
		  'password'=> bcrypt('password')
		]);
	}
}
