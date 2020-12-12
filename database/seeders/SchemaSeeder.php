<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schema;
use App\Models\Color;

class SchemaSeeder extends Seeder
{
    /** @var Schema  */
    private Schema $schema;

    /** @var array  */
    private array $colors;

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
        $this->schema = $schema;

        $this->colors = Color::query()->pluck('id', 'name')->toArray();

        $this->attachColors();

        $this->seedHall();
        $this->seedBalcony();
    }

    private function attachColors() : void
    {
        $colorPrices = [
            'green' => 40,
            'blue' => 50,
            'purple' => 60,
            'yellow' => 80,
            'red' => 100,
        ];

        Color::query()->each(function (Color $color) use ($colorPrices) {
            if ($color->name === 'busy') {
                return;
            }

            $this->schema->colors()->attach([
                $color->id => ['price' => $colorPrices[$color->name]]
            ]);
        });
    }

    private function seedHall() : void
    {
        $rowIndex = 1;
        while ($rowIndex <= 13) {
            $cols = $colorId = 0;
            switch (true) {
                case $rowIndex === 1:
                    $colorId = $this->colors['purple'];
                    $cols = 20;
                    break;
                case $rowIndex === 2:
                    $colorId = $this->colors['yellow'];
                    $cols = 20;
                    break;
                case $rowIndex === 3:
                    $colorId = $this->colors['yellow'];
                    $cols = 18;
                    break;
                case $rowIndex === 4:
                    $colorId = $this->colors['red'];
                    $cols = 18;
                    break;
                case $rowIndex === 5:
                    $colorId = $this->colors['red'];
                    $cols = 15;
                    break;
                case $rowIndex === 6 || $rowIndex === 7:
                    $colorId = $this->colors['yellow'];
                    $cols = 13;
                    break;
                case $rowIndex === 8:
                    $colorId = $this->colors['yellow'];
                    $cols = 15;
                    break;
                case $rowIndex === 9 || $rowIndex === 10:
                    $colorId = $this->colors['purple'];
                    $cols = 17;
                    break;
                case $rowIndex === 11 || $rowIndex === 12:
                    $colorId = $this->colors['blue'];
                    $cols = 17;
                    break;
                case $rowIndex === 13:
                    $colorId = $this->colors['blue'];
                    $cols = 15;
                    break;
            }

            $row = $this->schema->rows()->create([
                'row' => $rowIndex,
                'color_id' => $colorId
            ]);

            $colIndex = 1;
            while ($colIndex <= $cols) {
                switch (true) {
                    case (($rowIndex === 1 && $colIndex <= 10)
                        || ($rowIndex === 2 && $colIndex <= 10)
                        || ($rowIndex === 3 && $colIndex <= 6)
                        || ($rowIndex === 4 && $colIndex <= 9)
                        || ($rowIndex === 5 && $colIndex <= 8)
                        || ($rowIndex === 6 && $colIndex <= 7)
                        || ($rowIndex === 7 && $colIndex <= 7)
                        || ($rowIndex === 8 && $colIndex <= 8)
                        || ($rowIndex === 9 && $colIndex <= 9)
                        || ($rowIndex === 10 && $colIndex <= 9)
                        || ($rowIndex === 11 && $colIndex <= 9)
                        || ($rowIndex === 12 && $colIndex <= 9)
                        || ($rowIndex === 13 && $colIndex <= 8)
                    ) :
                        $onLeft = true;
                        $onRight = false;
                        break;
                    default:
                        $onLeft = false;
                        $onRight = true;
                        break;
                }

                $row->cols()->create([
                    'seat' => $colIndex,
                    'on_left' => $onLeft,
                    'on_right' => $onRight,
                ]);
                $colIndex++;
            }

            $rowIndex++;
        }

        // Left Loggia
        for ($rowIndex = 1; $rowIndex <= 2; $rowIndex++) {
            $row = $this->schema->rows()->create([
                'row' => $rowIndex,
                'color_id' => $this->colors['red'],
                'on_loggia' => true,
                'on_left' => true,
            ]);

            for ($colIndex = 1; $colIndex <= 4; $colIndex++) {
                $row->cols()->create([
                    'seat' => $colIndex
                ]);
                $colIndex++;
            }
        }

        // Right Loggia
        for ($rowIndex = 1; $rowIndex <= 2; $rowIndex++) {
            $row = $this->schema->rows()->create([
                'row' => $rowIndex,
                'color_id' => $this->colors['red'],
                'on_loggia' => true,
                'on_right' => true,
            ]);

            for ($colIndex = 1; $colIndex <= 4; $colIndex++) {
                $row->cols()->create([
                    'seat' => $colIndex
                ]);
                $colIndex++;
            }
        }
    }

    private function seedBalcony() : void
    {
        $rowIndex = 1;
        while ($rowIndex <= 3) {
            $cols = $colorId = 0;
            switch (true) {
                case $rowIndex === 1 || $rowIndex === 2:
                    $colorId = $this->colors['green'];
                    $cols = 19;
                    break;
                case $rowIndex === 3:
                    $colorId = $this->colors['green'];
                    $cols = 18;
                    break;
            }

            $row = $this->schema->rows()->create([
                'row' => $rowIndex,
                'color_id' => $colorId,
                'on_balcony' => true,
            ]);

            $colIndex = 1;
            while ($colIndex <= $cols) {
                switch (true) {
                    case $colIndex <= 10:
                        $onLeft = true;
                        $onRight = false;
                        break;
                    default:
                        $onLeft = false;
                        $onRight = true;
                        break;
                }

                $row->cols()->create([
                    'seat' => $colIndex,
                    'on_left' => $onLeft,
                    'on_right' => $onRight,
                ]);
                $colIndex++;
            }

            $rowIndex++;
        }

        // loggia
        $row = $this->schema->rows()->create([
            'row' => 1,
            'color_id' => $this->colors['red'],
            'on_loggia' => true,
            'on_balcony' => true,
        ]);

        $colIndex = 1;
        while($colIndex <= 3) {
            $row->cols()->create(['seat' => $colIndex]);
            $colIndex++;
        }
    }

}
