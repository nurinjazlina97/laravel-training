<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::factory()->count(10)->create();
    }
}
