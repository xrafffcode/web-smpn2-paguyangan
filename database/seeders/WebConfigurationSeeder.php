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
            'name' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum',
            'email' => 'Lorem Ipsum',
            'phone' => 'Lorem Ipsum',
            'address' => 'Lorem Ipsum',
            'map' => 'Lorem Ipsum',
            'facebook' => 'Lorem Ipsum',
            'instagram' => 'Lorem Ipsum',
            'youtube' => 'Lorem Ipsum',
            'headmaster_name' => 'Lorem Ipsum',
            'headmaster_message' => 'Lorem Ipsum',
            'vision' => 'Lorem Ipsum',
            'mission' => 'Lorem Ipsum',
        ]);
    }
}
