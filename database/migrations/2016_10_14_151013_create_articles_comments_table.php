<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesCommentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles_comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('comment', 1000);
            $table->integer('ip')->nullable();
            $table->string('ua')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles_comments');
	}

}
