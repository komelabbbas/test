<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            ['name' => 'admin', 'description' => 'Author of app'],
        ]);
        Role::create([
            ['name' => 'user', 'description' => 'Can view his profile'],
        ]);
    }
}
