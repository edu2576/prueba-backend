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
        'password' => '12345',
        'roles_id' => '1',
        'permissions_id' => '1'
      ]);
      DB::table('users')->insert([
        'name' => 'Persona',
        'email' => 'persona@correo.com',
        'password' => '12345',
        'roles_id' => '2',
        'permissions_id' => '2'
      ]);
    }
}
