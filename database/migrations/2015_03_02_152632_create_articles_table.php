<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('title');
            $table->string('alttitle', 255);
            $table->longText('header');
            $table->longText('body');
            $table->longText('body_wap');
            $table->string('image_path', 255);
            $table->bigInteger('attributes');
            $table->bigInteger('hit_count');
            $table->bigInteger('priority');
            $table->dateTime('published_time');
            $table->dateTime('expiry_time');
            $table->string('meta', 255);
            $table->string('keywords', 255);
            $table->string('author', 255);
            $table->longText('other_link');
            $table->bigInteger('is_active');
            $table->tinyInteger('is_hot');
            $table->string('code', 20);
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
		Schema::drop('articles');
	}

}
