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
        'place_select' => [
            'ru' => 'Выберите место',
            'ro' => 'Alege un loc',
            'en' => 'Select place'
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
        'spectacles_reserve_tickets' => [
            'ru' => 'Бронировать',
            'ro' => 'Cumpara bilete',
            'en' => 'Reserve tickets'
        ],
        'spectacles_min' => [
            'ru' => 'МИН',
            'ro' => 'MIN',
            'en' => 'MIN'
        ],
        'spectacles_program' => [
            'ru' => 'Програма спектакля',
            'ro' => 'Program spectacole',
            'en' => 'Spectacle Program'
        ],
        'spectacle_video_read_more' => [
            'ru' => 'Читать больше',
            'ro' => 'Citeste mai mult',
            'en' => 'Read more'
        ],
        'spectacle_price' => [
            'ru' => 'Цена',
            'ro' => 'Price',
            'en' => 'Price'
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
        'map_address' => [
            'ru' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55',
            'ro' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55',
            'en' => 'Republica Moldova, mun. Chişinău, str. Mihai Eminescu 55'
        ],
        'map_text_phone' => [
            'ru' => '22-20-28-90',
            'ro' => '22-20-28-90',
            'en' => '22-20-28-90'
        ],
        'map_text_email' => [
            'ru' => 'satiricus@satiricus.md',
            'ro' => 'satiricus@satiricus.md',
            'en' => 'satiricus@satiricus.md'
        ],
        'my_cart' => [
            'ru' => 'МОЯ КОРЗИНА',
            'ro' => 'COSUL MEU',
            'en' => 'MY CART'
        ],
        'my_account' => [
            'ru' => 'Мой акаунт',
            'ro' => 'Мой акаунт',
            'en' => 'My account'
        ],
        'search' => [
            'ru' => 'Поиск',
            'ro' => 'Search',
            'en' => 'Search'
        ],
        'soc_link_facebook' => [
            'ru' => 'https://www.facebook.com/groups/realtyua',
            'ro' => 'https://www.facebook.com/groups/realtyua',
            'en' => 'https://www.facebook.com/groups/realtyua'
        ],
        'soc_link_intagram' => [
            'ru' => 'https://www.instagram.com/formatica',
            'ro' => 'https://www.instagram.com/formatica',
            'en' => 'https://www.instagram.com/formatica'
        ],
        'menu_workers' => [
            'ru' => 'Команда',
            'ro' => 'Echipa',
            'en' => 'Team'
        ],
        'menu_spectacles' => [
            'ru' => 'Спектакли',
            'ro' => 'Спектакли',
            'en' => 'Spectacles'
        ],
        'menu_contacts' => [
            'ru' => 'Контакты',
            'ro' => 'Контакты',
            'en' => 'Contacts'
        ],
        'menu_blog' => [
            'ru' => 'Блог',
            'ro' => 'Блог',
            'en' => 'Blog'
        ],
        'menu_about' => [
            'ru' => 'О нас',
            'ro' => 'About',
            'en' => 'About'
        ],
        'footer_call_phone' => [
            'ru' => '+373 22 54 67',
            'ro' => '+373 22 54 67',
            'en' => '+373 22 54 67'
        ],
        'footer_work_schedule' => [
            'ru' => 'LU-VI 09:00 - 18:00',
            'ro' => 'LU-VI 09:00 - 18:00',
            'en' => 'LU-VI 09:00 - 18:00'
        ],
        'contact_title_top' => [
            'ru' => 'Контакты',
            'ro' => 'Contacte',
            'en' => 'Contacts'
        ],
        'contact_title' => [
            'ru' => 'Контакты',
            'ro' => 'Contacte',
            'en' => 'Contacts'
        ],
        'contact_write_to_us_title' => [
            'ru' => 'Напишите нам',
            'ro' => 'Scrie la noi',
            'en' => 'Write to us'
        ],
        'contact_ticket_office_text' => [
            'ru' => 'Тел.: Билетная касса',
            'ro' => 'Tel.: Casa de bilete:',
            'en' => 'Tel.: Ticket office:'
        ],
        'contact_ticket_office_phones' => [
            'ru' => '+373 22-20-28-90 / 069416078',
            'ro' => '+373 22-20-28-90 / 069416078',
            'en' => '+373 22-20-28-90 / 069416078'
        ],
        'contact_show_organizer_text' => [
            'ru' => 'Тел.: Организатор выставки:',
            'ro' => 'Tel.: Organizator spectacole:',
            'en' => 'Tel.: Show organizer:'
        ],
        'contact_show_organizer_phones' => [
            'ru' => '+373 22-20-28-94 / 069368274 / 061171906 / 079748302 / 068808571',
            'ro' => '+373 22-20-28-94 / 069368274 / 061171906 / 079748302 / 068808571',
            'en' => '+373 22-20-28-94 / 069368274 / 061171906 / 079748302 / 068808571'
        ],
        'contact_accounting_text' => [
            'ru' => 'Тел.: Бухгалтерия',
            'ro' => 'Tel.: Contabilitate',
            'en' => 'Tel.: Accounting'
        ],
        'contact_accounting_content' => [
            'ru' => '+373 22-20-28-93, satiricus@inbox.ru',
            'ro' => '+373 22-20-28-93, satiricus@inbox.ru',
            'en' => '+373 22-20-28-93, satiricus@inbox.ru'
        ],
        'contact_fax' => [
            'ru' => '+373 22-20-28-93, satiricus@inbox.ru',
            'ro' => '+373 22-20-28-93, satiricus@inbox.ru',
            'en' => '+373 22-20-28-93, satiricus@inbox.ru'
        ],
        'contact_email_text' => [
            'ru' => 'E-mail:',
            'ro' => 'E-mail:',
            'en' => 'E-mail:'
        ],
        'contact_email_content' => [
            'ru' => 'satiricus@satiricus.md / satiricus@inbox.ru',
            'ro' => 'satiricus@satiricus.md / satiricus@inbox.ru',
            'en' => 'satiricus@satiricus.md / satiricus@inbox.ru',
        ],
        'contact_form_name' => [
            'ru' => 'Название',
            'ro' => 'Nume',
            'en' => 'Name',
        ],
        'contact_form_first_name' => [
            'ru' => 'Имя',
            'ro' => 'Nume',
            'en' => 'First name',
        ],
        'contact_form_last_name' => [
            'ru' => 'Фамилия',
            'ro' => 'Numele de familie',
            'en' => 'Last name',
        ],
        'contact_form_phone' => [
            'ru' => 'Телефон',
            'ro' => 'Telefon',
            'en' => 'Phone',
        ],
        'contact_form_email' => [
            'ru' => 'E-mail',
            'ro' => 'E-mail',
            'en' => 'E-mail'
        ],
        'contact_form_message' => [
            'ru' => 'Сообщение',
            'ro' => 'Message',
            'en' => 'Message'
        ],
        'contact_form_send' => [
            'ru' => 'Отправить',
            'ro' => 'Trimite',
            'en' => 'Send'
        ],
        'contact_email' => [
            'ru' => 'matrix.yurinets.sv@gmal.com',
            'ro' => 'matrix.yurinets.sv@gmal.com',
            'en' => 'matrix.yurinets.sv@gmal.com'
        ],
        'contact_success_sent' => [
            'ru' => 'Сообщение успешно отправлено.',
            'ro' => 'Mesaj trimis cu succes.',
            'en' => 'Message sent successfully.'
        ],
        'contact_success_error' => [
            'ru' => 'Что-то пошло не так. Попробуйте позже.',
            'ro' => 'Ceva n-a mers bine. Încercați mai târziu.',
            'en' => 'Something went wrong. Try again later.'
        ],
        'blog_read_more' => [
            'ru' => 'Читать больше',
            'ro' => 'Citeste mai mult',
            'en' => 'READ MORE'
        ],
        'blog_title_top' => [
            'ru' => 'Festivalul national de teatru, ediţia a 23-a',
            'ro' => 'Festivalul national de teatru, ediţia a 23-a',
            'en' => 'Festivalul national de teatru, ediţia a 23-a'
        ],
        'blog_title' => [
            'ru' => 'Новости',
            'ro' => 'Noutati',
            'en' => 'News'
        ],
        'blog_top_text_1' => [
            'ru' => 'Duminica',
            'ro' => 'Duminica',
            'en' => 'Duminica'
        ],
        'blog_top_text_2' => [
            'ru' => '26',
            'ro' => '26',
            'en' => '26'
        ],
        'blog_top_text_3' => [
            'ru' => 'IULIE',
            'ro' => 'IULIE',
            'en' => 'IULIE'
        ],
        'about_spectacles_title' => [
            'ru' => 'În 30 ani de activitate Teatrul Național Satiricus Ion Luca <br> Caragiale a realizat următoarele spectacole de referinţă:',
            'ro' => 'În 30 ani de activitate Teatrul Național Satiricus Ion Luca <br> Caragiale a realizat următoarele spectacole de referinţă:',
            'en' => 'În 30 ani de activitate Teatrul Național Satiricus Ion Luca <br> Caragiale a realizat următoarele spectacole de referinţă:'
        ],
        'about_history_title' => [
            'ru' => 'Teatrul participă la mai multe festivaluri şi concursuri, obţinând <br> următoarle trofee:',
            'ro' => 'Teatrul participă la mai multe festivaluri şi concursuri, obţinând <br> următoarle trofee:',
            'en' => 'Teatrul participă la mai multe festivaluri şi concursuri, obţinând <br> următoarle trofee:'
        ],
        'about_tours_title' => [
            'ru' => 'Trupa realizează un şir de turnee importante peste hotare, inclusiv',
            'ro' => 'Trupa realizează un şir de turnee importante peste hotare, inclusiv',
            'en' => 'Trupa realizează un şir de turnee importante peste hotare, inclusiv'
        ],
        'about_gallery_title' => [
            'ru' => 'Galerie',
            'ro' => 'Galerie',
            'en' => 'Galerie'
        ],
        'spectacle_gallery_title' => [
            'ru' => 'Galerie',
            'ro' => 'Galerie',
            'en' => 'Galerie'
        ],
        'spectacle_start' => [
            'ru' => 'Старт',
            'ro' => 'Start',
            'en' => 'Start'
        ],
        'spectacle_duration' => [
            'ru' => 'Продолжительность выступления',
            'ro' => 'Durata performanței',
            'en' => 'Performance duration'
        ],
        'spectacle_map_scene' => [
            'ru' => 'Сцена',
            'ro' => 'Scenă',
            'en' => 'Scena'
        ],
        'spectacle_map_first_floor' => [
            'ru' => 'Первый этаж',
            'ro' => 'Parter',
            'en' => 'Scena'
        ],
        'spectacle_map_lodge' => [
            'ru' => 'Лоджыя',
            'ro' => 'Loja',
            'en' => 'Lodge'
        ],
        'spectacle_map_left' => [
            'ru' => 'Слева',
            'ro' => 'Stanga',
            'en' => 'Left'
        ],
        'spectacle_map_right' => [
            'ru' => 'Справа',
            'ro' => 'Dreapta',
            'en' => 'Right'
        ],
        'spectacle_map_balcon' => [
            'ru' => 'Балкон',
            'ro' => 'Balcon',
            'en' => 'Balcony'
        ],
        'spectacle_map_tickets_for' => [
            'ru' => 'билеты на',
            'ro' => 'bilete pentru',
            'en' => 'tickets for'
        ],
        'spectacle_lei' => [
            'ru' => 'лей',
            'ro' => 'lei',
            'en' => 'lei'
        ],
        'spectacle_row' => [
            'ru' => 'ряд',
            'ro' => 'rândul',
            'en' => 'row'
        ],
        'spectacle_place' => [
            'ru' => 'место',
            'ro' => 'locul',
            'en' => 'place'
        ],
        'spectacle_total' => [
            'ru' => 'Вместе',
            'ro' => 'Total',
            'en' => 'Total'
        ],
        'cart_buy_fill_details' => [
            'ru' => 'Заполните ваши данные',
            'ro' => 'Completați detaliile dvs',
            'en' => 'Fill in your details'
        ],
        'cart_buy_accept' => [
            'ru' => 'Принимаю',
            'ro' => 'Accept',
            'en' => 'Accepts'
        ],
        'cart_buy_terms_and_cond' => [
            'ru' => 'правила и условия',
            'ro' => 'Termeni si conditiile',
            'en' => 'the Terms and Conditions'
        ],
        'cart_buy_terms_link' => [
            'ru' => 'https://www.google.com',
            'ro' => 'https://www.google.com',
            'en' => 'https://www.google.coms'
        ],
        'cart_back' => [
            'ru' => 'Назад',
            'ro' => 'Înapoi',
            'en' => 'Back'
        ],
        'cart_empty' => [
            'ru' => 'Корзина пустая',
            'ro' => 'Cart empty',
            'en' => 'Cart empty'
        ],
        'success_title' => [
            'ru' => 'Multumesc pentru cumparaturile facute',
            'ro' => 'Multumesc pentru cumparaturile facute',
            'en' => 'Multumesc pentru cumparaturile facutes'
        ],
        'success_desc' => [
            'ru' => '<b>Biletele au fost trimise la căsuța poștală indicată</b><br> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.',
            'ro' => '<b>Biletele au fost trimise la căsuța poștală indicată</b><br> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.',
            'en' => '<b>Biletele au fost trimise la căsuța poștală indicată</b><br> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.'
        ],
        'success_download_tickets' => [
            'ru' => 'Скачать билеты',
            'ro' => 'Descarca bilet',
            'en' => 'Download tickets'
        ],
        'email_reserved_tickets_for' => [
            'ru' => 'Зарезервированные билеты для',
            'ro' => 'Reserved tickets for',
            'en' => 'Reserved tickets for'
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
