<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settingsData = [
            ['key' => 'site_name', 'value' => 'Database Settings Article'],
            ['key' => 'description', 'value' => 'Discover ways to handle app settings via database.'],
            ['key' => 'admin_email', 'value' => 'admin@demo.com'],
            ['key' => 'posts_per_page', 'value' => 10],
            ['key' => 'users_can_register', 'value' => true],
        ];
        Setting::insert($settingsData);
    }
}
