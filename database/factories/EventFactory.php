<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> 'MasterClass Data',
            'description' => $this->faker->paragraph(2),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'location'=>$this->faker->city(),
            'max_participants' => '15',
            'tags' => 'Vue, Laravel, Docker',
            'available' => 'yes',
            'link' => $this->faker->url(),
        ];
    }
}
