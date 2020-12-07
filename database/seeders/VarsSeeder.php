<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VarModel;

class VarsSeeder extends Seeder
{

    /**
     * @var array
     */
    private array $vars = [
        'spectacles' => [
            'ru' => 'Спектакли',
            'ro' => 'Спектакли',
            'en' => 'Spectacles'
        ],
        'gallery' => [
            'ru' => 'Галерея',
            'ro' => 'Галерея',
            'en' => 'Gallery'
        ],
        'contacts' => [
            'ru' => 'Контакты',
            'ro' => 'Контакты',
            'en' => 'Contact'
        ],
    ];

    /**
     * @var array|string[]
     */
    private array $locales = ['ru', 'ro', 'en'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = now()->toDateString();

        collect($this->vars)->each(function ($var, $key) use ($dateNow) {
            $insertData = collect($this->locales)->map(function ($locale) use ($var, $key) {
                return [
                    'key_' . $locale => $key . "_" . $locale,
                    'val_' . $locale => $var[$locale]
                ];
            })->collapse()->toArray();

            $insertData['created_at'] = $dateNow;
            $insertData['updated_at'] = $dateNow;

            VarModel::query()->insert($insertData);
        });
    }
}
