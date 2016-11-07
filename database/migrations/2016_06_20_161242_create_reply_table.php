<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->integer('msg_id')->unsigned();
            $table->boolean('seen')->default(false);
            $table->longText('content');
            $table->string('empty1');
            $table->string('empty2');


            $table->string('from');
            $table->string('to');
            $table->string('status');


            $table->timestamps();
        });

        Schema::table('reply', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('msg_id')->references('id')->on('contacts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reply', function(Blueprint $table) {
            $table->dropForeign('reply_user_id_foreign');
            $table->dropForeign('reply_msg_id_foreign');
        });   


        Schema::drop('reply');
    }
}
