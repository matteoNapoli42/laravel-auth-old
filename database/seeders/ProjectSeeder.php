<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*Migration data 
             $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('thumb');
            $table->string('technologies');
            $table->timestamps();
        */
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $imageId = random_int(1, 100);
            $loremImage = 'https://picsum.photos/id/' . $imageId . '/200/300';


            $project->title = $faker->word();
            $project->description = $faker->text(200);
            $project->thumb = $loremImage;
            $project->technologies = $faker->word();

            $project->save();
        }
    }
}
