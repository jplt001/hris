<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            User::FIELD_EMAIL=> "super.admin@hris.com",
            User::FIELD_FIRST_NAME=> "Super",
            User::FIELD_LAST_NAME=> "Administrator",
            User::FIELD_PASSWORD=> Hash::make("123123"),
        ]);

        $user->assignRole("super-admin");

        $admin = User::create([
            User::FIELD_EMAIL=> "admin@hris.com",
            User::FIELD_FIRST_NAME=> "User",
            User::FIELD_LAST_NAME=> "Administrator",
            User::FIELD_PASSWORD=> Hash::make("123123"),
        ]);

        $admin->assignRole("admin");

        $hr = User::create([
            User::FIELD_EMAIL=> "hr@hris.com",
            User::FIELD_FIRST_NAME=> "Human",
            User::FIELD_LAST_NAME=> "Resource",
            User::FIELD_PASSWORD=> Hash::make("123123"),
        ]);

        $hr->assignRole("hr");

        $manager = User::create([
            User::FIELD_EMAIL=> "manager@hris.com",
            User::FIELD_FIRST_NAME=> "Manager",
            User::FIELD_LAST_NAME=> "User",
            User::FIELD_PASSWORD=> Hash::make("123123"),
        ]);

        $manager->assignRole("hr");

        $employee = User::create([
            User::FIELD_EMAIL=> "josephpatricktimcang@gmail.com",
            User::FIELD_FIRST_NAME=> "Joseph Patrick",
            User::FIELD_MIDDLE_NAME=> "Lagonoy",
            User::FIELD_LAST_NAME=> "Timcang",
            User::FIELD_PASSWORD=> Hash::make("123123"),
        ]);

        $employee->assignRole("employee");
    }
}
