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
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'postal_code' => fake()->postcode(),
            'logo_url' => fake()->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
        ]);

        $user->assignRole("admin");

        $user = User::create([
            'name' => "Metro User",
            'email' => "metro.user@gmail.com",
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'postal_code' => fake()->postcode(),
            'logo_url' => fake()->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
        ]);

        $user->assignRole("user");
    }
}
