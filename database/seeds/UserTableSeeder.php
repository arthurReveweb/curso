<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\LaravelProject\Entities\Project::truncate();
        //factory(\LaravelProject\Entities\User::class, 10)->create();
        factory(\LaravelProject\Entities\User::class)->create([
            'name' => 'Leonardo de Oliveira',
            'email' => 'leowkfmc@hotmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
    }
}
