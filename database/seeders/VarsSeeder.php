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
        'home_add_to_cart' => [
            'ru' => 'Добавить в корзину',
            'ro' => 'Adaugă în coș',
            'en' => 'Add to cart'
        ],
        'home_famous_quotes' => [
            'ru' => 'Известные цитаты',
            'ro' => 'Citate celebre',
            'en' => 'Famous quotes'
        ],
        'home_in_assembly' => [
            'ru' => 'В сборке',
            'ro' => 'In montare',
            'en' => 'In assembly'
        ],
        'home_all_photos' => [
            'ru' => 'ВСЕ ФОТОГРАФИИ',
            'ro' => 'TOATE POZELE',
            'en' => 'ALL PHOTOS'
        ],
        'home_gallery_title' => [
            'ru' => 'Галерея',
            'ro' => 'Galery',
            'en' => 'Gallery'
        ],
        'home_gallery_text' => [
            'ru' => 'În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.',
            'ro' => 'În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.',
            'en' => 'În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.În zilele de 26 iunie, ora 23.30 pe TVR INTERNATIONAL și 27 iunie, ora 12.30 pe TVR MOLDOVA va fi difuzat spectacolul CIULEANDRA de Liviu Rebreanu, un spectacol de Sandu Grecu.'
        ],
        'spectacles_all' => [
            'ru' => 'Все спектакли',
            'ro' => 'Toate spectacole',
            'en' => 'All spectacles'
        ],
        'spectacles_repertoire' => [
            'ru' => 'Репертуар',
            'ro' => 'Repertoriu',
            'en' => 'Repertoire'
        ],
        'spectacles_premiera' => [
            'ru' => 'Premiere',
            'ro' => 'Premiere',
            'en' => 'Premiere'
        ],
        'spectacles_buy_tickets' => [
            'ru' => 'Купить билеты',
            'ro' => 'cumpara bilete',
            'en' => 'Buy tickets'
        ],
        'spectacles_min' => [
            'ru' => 'МИН',
            'ro' => 'MIN',
            'en' => 'MIN'
        ],
//        'spectacles' => [
//            'ru' => 'Спектакли',
//            'ro' => 'Спектакли',
//            'en' => 'Spectacles'
//        ],
//        'contacts' => [
//            'ru' => 'Контакты',
//            'ro' => 'Контакты',
//            'en' => 'Contact'
//        ],
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

            VarModel::query()->insertOrIgnore($insertData);
        });
    }
}
