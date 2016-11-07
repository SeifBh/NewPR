<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 30)->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('role_id')->unsigned();
			$table->boolean('seen')->default(false);
			$table->boolean('valid')->default(false);
			$table->boolean('confirmed')->default(false);
			$table->string('confirmation_code')->nullable();

			$table->string('app_ID', 60);

            $table->string('title_user');
            $table->string('middle_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('seen_other_names');
            $table->string('yes_state', 60);
            $table->string('country_born');
            $table->string('how_long_resident');
            $table->string('matrials_status');
            $table->string('current_employement_status');
            $table->string('occupation');
            $table->string('long_worked_employer');
            $table->mediumText('supporting_statment');
            $table->string('house_name');
            $table->string('house_flat_number');
            $table->string('street_road_name');
            $table->string('adress2');
            $table->string('town');
            $table->string('city');
            $table->string('country');
            $table->string('post_code');
            $table->string('refer');
            $table->string('cmc_name');

            $table->string('street_road_name2');
            $table->string('adress2_2');
            $table->string('town2');
            $table->string('city2');
            $table->string('country2');
            $table->string('post_code2');
            $table->string('auth_number');

            $table->string('under_formal_contract');


            $table->string('hm_prospects1');
            $table->string('hm_prospects2');
            $table->string('hm_prospects3');

            			

            $table->string('date_day');
            $table->string('date_month');
            $table->string('date_year');


            $table->string('path_picture');
            $table->string('path_passeport');
            $table->string('path_CIN');



            $table->string('home_number');
            $table->string('mobile_number');
            $table->string('reserve1');
            $table->string('reserve2');
            $table->string('reserve3');


			$table->timestamps();
			$table->rememberToken();			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
