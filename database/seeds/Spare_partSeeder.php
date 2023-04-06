<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;

class Spare_partSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_spare_part');
        
    

    	for($i = 1; $i <= 20; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('spare_part')->insert([
    			'jenis' => $faker->name,
    			'qty' => $faker->numberBetween(10,50),
                'created_at' => $this->faker->date($format='Y-m-d', $max='now')
    		]);
 
    	}
 
    }
}

