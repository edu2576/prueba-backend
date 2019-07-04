<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@correo.com',
        'password' => '12345'
      ]);
      DB::table('users')->insert([
        'name' => 'Peruserssona',
        'email' => 'persona@correo.com',
        'password' => '12345'
      ]);
    }
}
