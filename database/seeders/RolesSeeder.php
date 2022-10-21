<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name"=> "super-admin",
            "guard_name"=> "web",
        ]);
        Role::create([
            "name"=> "admin",
            "guard_name"=> "web",
        ]);
        Role::create([
            "name"=> "hr",
            "guard_name"=> "web",
        ]);
        Role::create([
            "name"=> "manager",
            "guard_name"=> "web",
        ]);
        Role::create([
            "name"=> "employee",
            "guard_name"=> "web",
        ]);
    }
}
