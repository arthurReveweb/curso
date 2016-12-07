<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\LaravelProject\Entities\Client::truncate();
        factory(\LaravelProject\Entities\Client::class, 10)->create();
    }
}
