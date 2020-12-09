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
        'spectacles_select' => [
            'ru' => 'Выберите спектакль',
            'ro' => 'Alege spectacol',
            'en' => 'Select spectacle'
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
        'news' => [
            'ru' => 'Новости',
            'ro' => 'Noutati',
            'en' => 'News'
        ],
        'news_details' => [
            'ru' => 'Детали',
            'ro' => 'Detali',
            'en' => 'Details'
        ],
        'news_all' => [
            'ru' => 'Все новости',
            'ro' => 'Toate noutati',
            'en' => 'All news'
        ],
        'home_team_title' => [
            'ru' => 'Команда',
            'ro' => 'Team',
            'en' => 'Team'
        ],
        'home_all_actors' => [
            'ru' => 'Все акторы',
            'ro' => 'Toate actorii',
            'en' => 'All actors'
        ],
        'home_team_text' => [
            'ru' => 'Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi multilateral. Ei au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la fondare şi a rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului, 10 Artiști Emeriți şi 2 Maeştri ai Artei.',
            'ro' => 'Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi multilateral. Ei au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la fondare şi a rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului, 10 Artiști Emeriți şi 2 Maeştri ai Artei.',
            'en' => 'Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi multilateral. Ei au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la fondare şi a rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului, 10 Artiști Emeriți şi 2 Maeştri ai Artei.'
        ],
        'team_title_top' => [
            'ru' => 'Команда',
            'ro' => 'Team',
            'en' => 'Team'
        ],
        'team_title' => [
            'ru' => 'Команда',
            'ro' => 'Team',
            'en' => 'Team'
        ],
        'base_all' => [
            'ru' => 'Все',
            'ro' => 'Toate',
            'en' => 'All'
        ],
        'home_map_details_text' => [
            'ru' => 'Больше подробностей',
            'ro' => 'entru mai multe detalii',
            'en' => 'For more details'
        ],
        'home_map_details_button_link' => [
            'ru' => 'https://www.google.com',
            'ro' => 'https://www.google.com',
            'en' => 'https://www.google.com'
        ],
        'home_map_details_button_text' => [
            'ru' => 'купить билеты',
            'ro' => 'cumpara bilete',
            'en' => 'buy tickets'
        ],
        'home_map_address' => [
            'ru' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55',
            'ro' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55',
            'en' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55'
        ],
        'home_map_text_phone' => [
            'ru' => '22-20-28-90',
            'ro' => '22-20-28-90',
            'en' => '22-20-28-90'
        ],
        'home_map_text_email' => [
            'ru' => 'satiricus@satiricus.md',
            'ro' => 'satiricus@satiricus.md',
            'en' => 'satiricus@satiricus.md'
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

            VarModel::query()->insertOrIgnore($insertData);
        });
    }
}
