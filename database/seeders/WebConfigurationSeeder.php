<?php

namespace Database\Seeders;

use App\Models\WebConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebConfiguration::create([
            'name' => 'Laravel 10',
            'description' => 'Laravel 10',
            'email' => 'Laravel 10',
            'phone' => 'Laravel 10',
            'logo' => 'web-configurations/logo.png',
            'address' => 'Laravel 10',
            'map' => 'Laravel 10',
            'facebook' => 'Laravel 10',
            'instagram' => 'Laravel 10',
            'youtube' => 'Laravel 10',
        ]);
    }
}
