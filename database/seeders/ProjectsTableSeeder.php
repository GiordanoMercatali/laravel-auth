<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $projects = config('projects');

        foreach($projects as $project){
            $new_project = new Project();
            $new_project->title = $project['title'];
            $new_project->description = $project['description'];
            $new_project->languages = $project['languages'];
            $new_project->n_stakeholders = $project['n_stakeholders'];
            $new_project->year = $project['year'];
            $new_project->git_link = $project['git_link'];
            $new_project->save();
        }

        
    }
}
