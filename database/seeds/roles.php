<?php

use Illuminate\Database\Seeder;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          'name' => 'Admin'
        ]);
        DB::table('roles')->insert([
          'name' => 'Auxiliar'
        ]);
    }
}
