<?php

use Tubr\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
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

	public function testEditProfilePageLoadsCorrectly()
	{
		$this->withoutMiddleware();

		$this->createUser();

		$this->call('GET', 'profile/1');

		$this->assertResponseOk();
	}

	private function createUser()
	{
		User::create([
		  'name' => 'johndoe',
		  'email' => 'john@doe.com',
		  'password' => bcrypt('password')
		]);
	}
}
