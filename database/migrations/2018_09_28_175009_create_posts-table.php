<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title'); //Could also be a name
            $table->string('house_number'); //Could also be a name
            $table->string('post_code');
            $table->string('property_type');
            $table->integer('beds_no');
            $table->integer('bathrooms_no');
            $table->decimal('price');
            $table->integer('commission')->nullable();
            $table->text('description');
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
        //
    }
}
