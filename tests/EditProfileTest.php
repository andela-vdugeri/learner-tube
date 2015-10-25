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

	public function testProfileUpdate()
	{
		$this->withoutMiddleware();

		//$this->createUser();

		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user)
			->withSession(['name' => 'johndoe'])
			->visit('/dashboard')
			->click('Edit Profile')
			->seePageIs('profile/1')
			->type('John', 'name')
			->type('johndoe@example.com', 'email')
			->type('Kind folk from a little town', 'about')
			->press('action')
			->seePageIs('/dashboard');

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
