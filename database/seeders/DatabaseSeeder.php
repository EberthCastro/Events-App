<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Event::factory(6)->create();

        // Event::create([
        //     'title' => 'Masterclass Docker',
        //     'date' => '2023-01-28',
        //     'time' => '18:00:00',
        //     'max_participants' => '15',
        //     'description' => 'This masterclass is about Docker an probably will see Sonar and Jenkins',
        //     'available' => 'yes'  
        // ]);

        // Event::create([
        //     'title' => 'Masterclass Laravel',
        //     'date' => '2023-01-27',
        //     'time' => '18:00:00',
        //     'max_participants' => '15',
        //     'description' => 'This masterclass is about Laravel an probably will see Sonar and Jenkins',
        //     'available' => 'yes'  
        // ]);
    }
}
