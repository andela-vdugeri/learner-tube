<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashBoardTest extends TestCase
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

	public function testDashboardLoads()
	{

		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user);

		$this->call('GET', '/dashboard');

		$this->assertResponseOk();
	}


	public function testUserDetailsLoadOnDashboard()
	{
		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user);

		$this->call('GET', '/dashboard');
		$this->seePageIs('/dashboard');
		$this->assertViewHas('user');

	}

	public function testCategoriesLoadOnPage()
	{
		$user = factory(\Tubr\User::class)->create();
		$this->actingAs($user);

		$this->call('GET', '/dashboard');
		$this->seePageIs('/dashboard');

		$this->assertViewHas('categories');
	}
}
