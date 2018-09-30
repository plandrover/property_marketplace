<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder information for the properties table
        DB::table('properties')->insert([
            'house_number' => str_random(3),
            'post_code' => str_random(6),
            'property_type' => str_random(5),
            'bed_no' => str_random(6),
            'bathrooms_no' => str_random(6),
            'price' => str_random(6),
            'comission' => str_random(6),
            'description' => str_random(100),
        ]);
    }
}

//AD said put in a for loop that gives through 1 - 10
//Assign a number to each vale
