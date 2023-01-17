<?php

namespace App\Models;

class Event {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Docker',
                'date' => 'date: 27-01-23',
                'time' => 'time: 18:00 h',
                'max_participants' => 'places:15',
                'description' => 'Lorem ipsum solor sit amet consecttetur adipisicing alit. Ipsam minima et illo reprehenderit quas possimus voluptas',
                'available' => 'Disponibility: On time'
            ],
            [
                'id' => 2,
                'title' => 'Jenkins',
                'date' => '27-01-23',
                'time' => '18:00 h',
                'max_participants' => '15',
                'description' => 'Lorem ipsum solor sit amet consecttetur adipisicing alit. Ipsam minima et illo reprehenderit quas possimus voluptas',
                'available' => 'On time'
            ]

        ];
    }
}