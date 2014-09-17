<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGtweetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gtweets', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title_en');
            $table->string('title_mn');
            $table->string('image');
            $table->string('status_en');
            $table->string('status_mn');
            $table->integer('position');
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
		Schema::drop('gtweets');
	}

}
