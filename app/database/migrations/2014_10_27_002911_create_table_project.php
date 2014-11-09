<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('teamname');
			$table->string('numtasks');
			$table->string('budget');
			$table->string('spent');
			$table->string('taskscompleted');
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
		Schema::dropIfExists('project');
	}

}
