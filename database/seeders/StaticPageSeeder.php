<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\PageService;
use App\Http\Requests\Pages\StorePageRequest;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = app(PageService::class);

        $page = $service->createPage(new StorePageRequest([
            'name' => [
                'ru' => 'Спектакли',
                'ro' => 'Спектакли',
                'en' => 'Spectacles'
            ],
            'active' => true,
            'on_header' => true,
            'on_footer' => true,
            'type' => 'page',
            'order_top' => 2,
            'order_footer' => 2,
            'is_static' => true,
        ]));
        $page->update(['slug' => 'spectacles']);

        $page = $service->createPage(new StorePageRequest([
            'name' => [
                'ru' => 'Команда',
                'ro' => 'Echipa',
                'en' => 'Team'
            ],
            'active' => true,
            'on_header' => true,
            'on_footer' => true,
            'type' => 'page',
            'order_top' => 1,
            'order_footer' => 1,
            'is_static' => true,
        ]));
        $page->update(['slug' => 'workers']);

        $page = $service->createPage(new StorePageRequest([
            'name' => [
                'ru' => 'Блог',
                'ro' => 'Блог',
                'en' => 'Blog'
            ],
            'active' => true,
            'on_header' => true,
            'on_footer' => true,
            'type' => 'page',
            'order_top' => 3,
            'order_footer' => 3,
            'is_static' => true,
        ]));
        $page->update(['slug' => 'articles']);

        $page = $service->createPage(new StorePageRequest([
            'name' => [
                'ru' => 'Контакты',
                'ro' => 'Контакты',
                'en' => 'Contacts'
            ],
            'active' => true,
            'on_header' => true,
            'on_footer' => true,
            'type' => 'page',
            'order_top' => 4,
            'order_footer' => 4,
            'is_static' => true,
        ]));
        $page->update(['slug' => 'page/contacts']);

        $page = $service->createPage(new StorePageRequest([
            'name' => [
                'ru' => 'О нас',
                'ro' => 'About',
                'en' => 'About'
            ],
            'active' => true,
            'on_header' => false,
            'on_footer' => true,
            'type' => 'page',
            'order_top' => 5,
            'order_footer' => 5,
            'is_static' => true,
        ]));
        $page->update(['slug' => 'page/about']);
    }
}
