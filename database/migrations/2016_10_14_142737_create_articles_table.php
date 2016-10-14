<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('alias', 250);
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('description');
            $table->string('short_description', 1000);
            $table->string('seo_description', 1000);
            $table->integer('hits');
            $table->integer('likes');
            $table->tinyInteger('status')->default(0);
            $table->timestamp('published_at');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
