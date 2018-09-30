<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //nullable means column allows null values
        //I think laravel is auto non-null
        //
        Schema::create('properties', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('house_number'); //Could also be a name
            $table->string('post_code');
            $table->string('property_type');
            $table->string('image')->nullable();
            $table->integer('beds_no');
            $table->integer('bathrooms_no');
            $table->decimal('price');
            $table->integer('commission')->nullable();
            $table->text('description');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
