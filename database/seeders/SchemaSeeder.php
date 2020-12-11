<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schema;

class SchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::query()->create([
            'name' => [
                'ru' => 'Big schema',
                'ro' => 'Big schema',
                'en' => 'Big schema',
            ],
            'active' => true
        ]);
    }
}
