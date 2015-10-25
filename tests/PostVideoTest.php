<?php

use Tubr\User;
use Tubr\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostVideoTest extends TestCase
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

	public function testDashBoardLoadsCorrectly()
	{
		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user)
			->withSession(['name' => 'johndoe'])
			->visit('/dashboard')
			->see('Tubr');
	}

	public function testVideoUplaod()
	{
		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user)
		  ->withSession(['name' => 'johndoe'])
		  ->visit('/dashboard');

		//create a category
		$this->createCategory();

		//create a user
		$this->createUser();

		$this->click('add');
		$this->type('video', 'title')
			->type('some random text', 'description')
			->type('https://www.youtube.com/watch?v=Dji9ALCgfpM', 'url')
			->select(1, 'category')
			->press('action');

		$this->assertResponseOk();
	}


	private function createCategory()
	{
		Category::create([
			'name' => 'Ruby'
		]);
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
