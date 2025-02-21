<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gender;
use App\Models\Service;
use App\Models\Nationality;
use App\Models\CareerService;
use App\Models\AcademicAdvisor;
use App\Models\TutoringService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeding Tutoring Services
            User::factory(2)->create();

    }
}
