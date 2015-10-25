<?php

use Tubr\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterPageTest extends TestCase
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

	public function testRegistrationPageLoadsCorrectly()
	{
		$this->call('GET', '/register');

		$this->assertResponseOk();
	}

	public function testRegisterPageHasLogo()
	{
		$this->visit('/register')
			->see('Tubr')
			->seeLink('Tubr');
	}
	public  function testRegisterPageHasNoLoginLink()
	{
		$this->visit('/register')
			->dontSeeLink('/login');
	}

	public function testRegisterPageHasNoLogoutLink()
	{
		$this->visit('/')
			->dontSeeLink('/logout');
	}

	public function testRegisterPageWorksCorrectly()
	{


		$this->visit('/register')
			->type('johndoe', 'name')
			->type('john@doe.com', 'email')
			->type('password', 'password')
			->type('password','password_confirmation')
			->press('action')
			->seePageIs('/dashboard')
			->seeInDatabase('users',['name' =>'johndoe']);
	}

}
