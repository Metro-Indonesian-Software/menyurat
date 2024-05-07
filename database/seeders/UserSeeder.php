<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = \App\Models\User::factory(50)->create();

        // foreach($users as $user) {
        //     $user->assignRole("user");
        // }

        $user = User::create([
            'name' => "Metro Indonesian Software",
            'email' => "metrosoftware@gmail.com",
            'web_url' => 'https://metrosoftware.id',
            'street' => "Jl. Seberang Padang",
            'urban_village_id' => 34045,
            'district_id' => 4301,
            'region_id' => 446,
            'province_id' => 36,
            'phone_number' => "082289608096",
            'postal_code' => "25214",
            'password' => static::$password ??= Hash::make('password'),
            'completed' => true,
        ]);

        $user->assignRole("admin");

        $user = User::create([
            'name' => "Metro User",
            'email' => "metro.user@gmail.com",
            'street' => "Jl. Seberang Padang",
            'urban_village_id' => 34045,
            'district_id' => 4301,
            'region_id' => 446,
            'province_id' => 36,
            'phone_number' => "082289608096",
            'postal_code' => "25214",
            'password' => static::$password ??= Hash::make('password'),
            'completed' => true,
        ]);

        $user->assignRole("user");
    }
}
