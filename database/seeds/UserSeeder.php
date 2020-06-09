<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'cobrador1',
            'direccion' => 'avenida cobrador1',
            'rfc' => '1234cobrador1',
            'celular' => '0987654321',
            'email' => 'cobrador1@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'cobrador2',
            'direccion' => 'avenida cobrador2',
            'rfc' => '1234cobrador2',
            'celular' => '12345678990',
            'email' => 'cobrador2@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'suscriptor1',
            'direccion' => 'avenida suscriptor1',
            'rfc' => '12suscriptor1',
            'celular' => '1123456789',
            'email' => 'suscriptor1@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'suscriptor2',
            'direccion' => 'avenida suscriptor2',
            'rfc' => '12suscriptor2',
            'celular' => '0012345678',
            'email' => 'suscriptor2@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
