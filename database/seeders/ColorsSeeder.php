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
            ['name' => 'red', 'color' => '#FF646A'],
            ['name' => 'blue', 'color' => '#75B3E2'],
            ['name' => 'green', 'color' => '#97C992'],
            ['name' => 'yellow', 'color' => '#C6A564'],
            ['name' => 'purple', 'color' => '#D066A1'],
            ['name' => 'busy', 'color' => '#ededed'],
        ];

        foreach ($insertData as $item) {
            Color::query()->create($item);
        }
    }
}
