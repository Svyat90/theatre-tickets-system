<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\PageService;
use App\Http\Requests\Pages\StorePageRequest;

class PagesSeeder extends Seeder
{
    /**
     * @var PageService
     */
    private PageService $pageService;

    /**
     * @var array
     */
    private array $pages = [
        'slider' => [
            'name' => [
                'ru' => 'William Shakespeare',
                'ro' => 'William Shakespeare',
                'en' => 'William Shakespeare',
            ],
            'title' => [
                'ru' => 'Hamlet',
                'ro' => 'Hamlet',
                'en' => 'Hamlet',
            ],
            'description' => [
                'ru' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național “satiricus I.L. Caragiale” - la tv!',
                'ro' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național “satiricus I.L. Caragiale” - la tv!',
                'en' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național “satiricus I.L. Caragiale” - la tv!',
            ],
         ],
        'gallery' => [
            'title' => [
                'ru' => 'Un spectacol de Viorel CORNESCU',
                'ro' => 'Un spectacol de Viorel CORNESCU',
                'en' => 'Un spectacol de Viorel CORNESCU',
            ],
        ],
        'quotes' => [
            'name' => [
                'ru' => 'Ion Luca CARAGIALE',
                'ro' => 'Ion Luca CARAGIALE',
                'en' => 'Ion Luca CARAGIALE',
            ],
            'description' => [
                'ru' => 'DACĂ E INSUFLATĂ DE TALENT, OPERA VA TRĂI, PUȚIN IMPORTĂ CÎT: O CLIPĂ, UN VEAC, ORI MAI MULTE',
                'ro' => 'DACĂ E INSUFLATĂ DE TALENT, OPERA VA TRĂI, PUȚIN IMPORTĂ CÎT: O CLIPĂ, UN VEAC, ORI MAI MULTE',
                'en' => 'DACĂ E INSUFLATĂ DE TALENT, OPERA VA TRĂI, PUȚIN IMPORTĂ CÎT: O CLIPĂ, UN VEAC, ORI MAI MULTE',
            ]
        ],
        'assemblies' => [
            'name' => [
                'ru' => 'Revizorul',
                'ro' => 'Revizorul',
                'en' => 'Revizorul',
            ],
            'title' => [
                'ru' => 'de Nikolai GOGOL',
                'ro' => 'de Nikolai GOGOL',
                'en' => 'de Nikolai GOGOL',
            ],
            'description' => [
                'ru' => 'un spectacol de Sandu GRECU',
                'ro' => 'un spectacol de Sandu GRECU',
                'en' => 'un spectacol de Sandu GRECU',
            ]
        ],
    ];

    /**
     * PagesSeeder constructor.
     *
     * @param PageService $pageService
     */
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedSlider();
        $this->seedQuotes();
        $this->seedAssemblies();
        $this->seedGallery();
    }

    private function seedGallery()
    {
        $insertData = $this->pages['gallery'];

        $i = 0;
        while ($i < 4) {
            $insertData['type'] = $this->pageService::TYPE_GALLERY;
            $insertData['active'] = true;
            $insertData['date'] = now()->addWeeks(rand(1, 5))->toDateString();
            $page =$this->pageService->createPage(new StorePageRequest($insertData));
            $i++;

            $page
                ->addMediaFromUrl(asset("front/img/home-g-{$i}.jpg"))
                ->toMediaCollection('image');
        }
    }

    private function seedAssemblies() : void
    {
        $insertData = $this->pages['assemblies'];

        $i = 0;
        while ($i < 3) {
            $insertData['type'] = $this->pageService::TYPE_ASSEMBLY;
            $insertData['active'] = true;
            $this->pageService->createPage(new StorePageRequest($insertData));
            $i++;
        }
    }

    private function seedQuotes() : void
    {
        $insertData = $this->pages['quotes'];

        $i = 0;
        while ($i < 3) {
            $insertData['type'] = $this->pageService::TYPE_QUOTE;
            $insertData['active'] = true;
            $page = $this->pageService->createPage(new StorePageRequest($insertData));

            $page
                ->addMediaFromUrl(asset('front/img/home-c-1.jpg'))
                ->toMediaCollection('image');

            $i++;
        }
    }

    private function seedSlider() : void
    {
        $insertData = $this->pages['slider'];

        $i = 0;
        while ($i < 4) {
            $insertData['date'] = now()->addWeeks(rand(1, 5))->toDateString();
            $insertData['type'] = $this->pageService::TYPE_SLIDER;
            $insertData['active'] = true;
            $page = $this->pageService->createPage(new StorePageRequest($insertData));

            $page
                ->addMediaFromUrl(asset('front/img/home-slider-img.jpg'))
                ->toMediaCollection('image');

            $i++;
        }
    }
}
