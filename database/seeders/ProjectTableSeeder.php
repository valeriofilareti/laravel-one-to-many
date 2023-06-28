<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Category;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {

            $new_project = new Project();

            $new_project->name = $faker->sentence();
            $new_project->category_id = Category::inRandomOrder()->first()->id;
            $new_project->description = $faker->text();
            $new_project->creation_date = $faker->date();

            $new_project->save();
        }
    }
}
