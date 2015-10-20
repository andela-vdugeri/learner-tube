<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('description')->default('');
			$table->string('url');
			$table->integer('owner_id')->unsigned();
			$table->integer('category_id')->unsigned();
            $table->timestamps();


			$table->foreign('owner_id')
				->references('id')
				->on('users')
				->onDelete('cascade');

			$table->foreign('category_id')
				->references('id')
				->on('categories')
				->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}
