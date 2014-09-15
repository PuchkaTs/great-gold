<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('career', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('header_mn');
			$table->string('header_en');
			$table->text('body_mn');
			$table->text('body_en');
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
		Schema::drop('career');
	}

}
