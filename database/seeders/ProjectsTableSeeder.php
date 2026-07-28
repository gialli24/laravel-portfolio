<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /* 
            id, name, customer, period, description  
        */

        for ($i=0; $i < 5; $i++) { 
            $newProject = new Project();

            $newProject->name = $faker->sentence(5);
            $newProject->customer = $faker->company();
            $newProject->period = $faker->year() . ' - ' . $faker->year();
            $newProject->description = $faker->paragraph();

            $newProject->type_id = rand(1,4);

            $newProject->save();
        }
    }
}
