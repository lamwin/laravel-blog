<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesAndBlogsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->string('slug')->default('');
			$table->timestamps();
		});

		Schema::create('blogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned()->default(0);
			$table->foreign('category_id')->reference('id')->on('categories')->onDelete('cascade');
			$table->string('title')->default('');
			$table->string('slug')->default('');
			$table->text('body')->default('');
			$table->timestamps();
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogs');
		Schema::drop('categories');
	}

}
