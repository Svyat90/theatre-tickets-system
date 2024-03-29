<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            VarsSeeder::class,
            PagesSeeder::class,
            ArticleSeeder::class,
            WorkerSeeder::class,
            AboutSeeder::class,
            ColorsSeeder::class,
            SchemaSeeder::class,
            SpectacleSeeder::class,
            StaticPageSeeder::class
        ]);
    }
}
