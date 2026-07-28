<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = \App\Models\Technology::all()->pluck('id')->toArray();

        Project::all()->each(function (Project $project) use ($technologies) {
            $project->technologies()->sync(
                collect($technologies)->random(rand(2, 5))->toArray()
            );
        });
    }
}
