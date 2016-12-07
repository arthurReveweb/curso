<?php

use Illuminate\Database\Seeder;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\LaravelProject\Entities\Project::truncate();
        factory(\LaravelProject\Entities\ProjectNote::class, 50)->create();
    }
}
