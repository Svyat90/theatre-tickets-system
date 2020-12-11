<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertData = [
            ['name' => 'Red', 'color' => '#FF0000'],
            ['name' => 'Blue', 'color' => '#0000FF'],
            ['name' => 'Green', 'color' => '#008000'],
            ['name' => 'Yellow', 'color' => '#FFFF00'],
            ['name' => 'Purple', 'color' => '#800080'],
            ['name' => 'BlueDark', 'color' => '#0000A0'],
        ];

        foreach ($insertData as $item) {
            Color::query()->create($item);
        }
    }
}
