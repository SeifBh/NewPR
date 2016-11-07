<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('admin_id')->unsigned();

			$table->string('user_full_name');
			$table->string('user_username');

			$table->string('role', 255);
			$table->string('subject');
			$table->longText('content');
			$table->boolean('seen')->default(false);
			$table->timestamps();
			$table->string('status', 255);


			//form
			$table->string('text');

			$table->string('avaible_number');

			$table->string('path_file2', 255);
			$table->string('path_file3', 255);
			$table->string('path_file4', 255);
			$table->string('path_file5', 255);
			$table->string('path_file6', 255);
			$table->string('path_file7', 255);
			$table->string('path_file8', 255);
			$table->string('path_file9', 255);
			$table->string('path_file10', 255);


			$table->string('contact_3', 255);

		//	$table->text('text');
		});





		   Schema::table('contacts', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contacts', function(Blueprint $table) {
            $table->dropForeign('contacts_user_id_foreign');
            $table->dropForeign('contacts_admin_id_foreign');
        });     

		Schema::drop('contacts');
	}

}
