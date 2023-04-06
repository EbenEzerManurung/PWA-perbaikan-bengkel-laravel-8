<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        // insert data ke table pegawai
        DB::table('user')->insert([
        	'id' => 1,
        	'nama' => 'admin',
        	'role' => 'admin',
        	'foto' => '',
            'admin' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => 123456,
        ]);
    }
}
