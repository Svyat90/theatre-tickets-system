<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schema;
use App\Models\Color;

class SchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Schema $schema */
        $schema = Schema::query()->create([
            'name' => [
                'ru' => 'Big schema',
                'ro' => 'Big schema',
                'en' => 'Big schema',
            ],
            'active' => true
        ]);

        $colors = Color::query()->pluck('id', 'name')->toArray();

        $this->seedHall($schema, $colors);
        $this->seedBalcony($schema, $colors);
    }

    /**
     * @param Schema $schema
     * @param array  $colors
     */
    private function seedHall(Schema $schema, array $colors) : void
    {
        $rowIndex = 1;
        while ($rowIndex <= 13) {
            $cols = $price = 0;
            switch (true) {
                case $rowIndex === 1:
                    $colorId = $colors['purple'];
                    $cols = 20;
                    $price = 60;
                    break;
                case $rowIndex === 2:
                    $colorId = $colors['yellow'];
                    $cols = 20;
                    $price = 80;
                    break;
                case $rowIndex === 3:
                    $colorId = $colors['yellow'];
                    $cols = 18;
                    $price = 80;
                    break;
                case $rowIndex === 4:
                    $colorId = $colors['red'];
                    $cols = 18;
                    $price = 100;
                    break;
                case $rowIndex === 5:
                    $colorId = $colors['red'];
                    $cols = 15;
                    $price = 100;
                    break;
                case $rowIndex === 6 || $rowIndex === 7:
                    $colorId = $colors['yellow'];
                    $cols = 13;
                    $price = 80;
                    break;
                case $rowIndex === 8:
                    $colorId = $colors['yellow'];
                    $cols = 15;
                    $price = 80;
                    break;
                case $rowIndex === 9 || $rowIndex === 10:
                    $colorId = $colors['purple'];
                    $cols = 17;
                    $price = 60;
                    break;
                case $rowIndex === 11 || $rowIndex === 12:
                    $colorId = $colors['blue'];
                    $cols = 17;
                    $price = 50;
                    break;
                case $rowIndex === 13:
                    $colorId = $colors['blue'];
                    $cols = 15;
                    $price = 50;
                    break;
            }

            $row = $schema->rows()->create([
                'index' => $rowIndex,
                'color_id' => $colorId,
                'price' => $price
            ]);

            $colIndex = 1;
            while ($colIndex <= $cols) {
                $row->cols()->create(['index' => $colIndex]);
                $colIndex++;
            }

            $rowIndex++;
        }

        // Left Loggia
        for ($rowIndex = 1; $rowIndex <= 2; $rowIndex++) {
            $row = $schema->rows()->create([
                'index' => $rowIndex,
                'color_id' => $colors['red'],
                'price' => 100,
                'on_loggia' => true,
                'on_left' => true,
            ]);

            for ($colIndex = 1; $colIndex <= 4; $colIndex++) {
                $row->cols()->create([
                    'index' => $colIndex
                ]);
                $colIndex++;
            }
        }

        // Right Loggia
        for ($rowIndex = 1; $rowIndex <= 2; $rowIndex++) {
            $row = $schema->rows()->create([
                'index' => $rowIndex,
                'color_id' => $colors['red'],
                'price' => 100,
                'on_loggia' => true,
                'on_right' => true,
            ]);

            for ($colIndex = 1; $colIndex <= 4; $colIndex++) {
                $row->cols()->create([
                    'index' => $colIndex
                ]);
                $colIndex++;
            }
        }
    }

    /**
     * @param Schema $schema
     * @param array  $colors
     */
    private function seedBalcony(Schema $schema, array $colors) : void
    {
        $rowIndex = 1;
        while ($rowIndex <= 3) {
            $cols = $price = 0;
            switch (true) {
                case $rowIndex === 1 || $rowIndex === 2:
                    $colorId = $colors['green'];
                    $cols = 19;
                    $price = 40;
                    break;
                case $rowIndex === 3:
                    $colorId = $colors['green'];
                    $cols = 18;
                    $price = 40;
                    break;
            }

            $row = $schema->rows()->create([
                'index' => $rowIndex,
                'color_id' => $colorId,
                'price' => $price,
                'on_balcony' => true,
            ]);

            $colIndex = 1;
            while($colIndex <= $cols) {
                $row->cols()->create([
                    'index' => $colIndex
                ]);
                $colIndex++;
            }

            $rowIndex++;
        }

        $row = $schema->rows()->create([
            'index' => 1,
            'color_id' => $colors['red'],
            'price' => 100,
            'on_loggia' => true,
            'on_balcony' => true,
        ]);

        $colIndex = 1;
        while($colIndex <= 3) {
            $row->cols()->create([
                'index' => $colIndex
            ]);
            $colIndex++;
        }
    }

}
