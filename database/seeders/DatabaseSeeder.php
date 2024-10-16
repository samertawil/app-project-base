<?php

namespace Database\Seeders;

use App\Models\Ability;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SettingSeeder::class);
        // User::factory(10)->create();
        // Ability::factory(100)->create();
    //     User::factory(100)->create([
    //         // 'name' => 'Test User',
    //         // 'email' => 'test@example.com',
    //   ]);
    }
}


