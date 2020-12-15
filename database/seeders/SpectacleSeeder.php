<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Requests\Spectacles\StoreSpectacleRequest;
use App\Models\Schema;
use App\Services\Spectacles\SpectacleService;

class SpectacleSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $spectacles = [
        [
            'name' => [
                'ru' => 'Spectacle name new',
                'ro' => 'Spectacle name new',
                'en' => 'Spectacle name new',
            ],
            'author' => [
                'ru' => 'Spectacle Title new',
                'ro' => 'Spectacle Title new',
                'en' => 'Spectacle Title new',
            ],
            'producer' => [
                'ru' => 'Spectacle Title new',
                'ro' => 'Spectacle Title new',
                'en' => 'Spectacle Title new',
            ],
            'description' => [
                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  new',
                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  new',
                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  new',
            ],
            'text_1' => [
                'ru' => '<p class="program-row-divider">Distribuția:</p>
                            <div class="program-row">
                                <span class="program-name">Regia artistica, scenografia:</span>
                                <a href="#" class="program-person">Alexandru GRECU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Muzica:</span>
                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
                            </div>
                            <div class="program-row mb-30 bb-0">
                                <span class="program-name">Costume:</span>
                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
                            </div>
                            <p class="program-row-divider">Actorii</p>
                            <div class="program-row">
                                <span class="program-name">Ance</span>
                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Dragomir</span>
                                <a href="#" class="program-person">Ion GROSU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Gheorghe</span>
                                <a href="#" class="program-person">Gheorghe GUSAN</a>
                            </div>
                            <div class="program-row bb-0">
                                <span class="program-name">Ion</span>
                                <a href="#" class="program-person">Alexandru CRILOV</a>
                            </div>',
                'ro' => '<p class="program-row-divider">Distribuția:</p>
                            <div class="program-row">
                                <span class="program-name">Regia artistica, scenografia:</span>
                                <a href="#" class="program-person">Alexandru GRECU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Muzica:</span>
                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
                            </div>
                            <div class="program-row mb-30 bb-0">
                                <span class="program-name">Costume:</span>
                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
                            </div>
                            <p class="program-row-divider">Actorii</p>
                            <div class="program-row">
                                <span class="program-name">Ance</span>
                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Dragomir</span>
                                <a href="#" class="program-person">Ion GROSU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Gheorghe</span>
                                <a href="#" class="program-person">Gheorghe GUSAN</a>
                            </div>
                            <div class="program-row bb-0">
                                <span class="program-name">Ion</span>
                                <a href="#" class="program-person">Alexandru CRILOV</a>
                            </div>',
                'en' => '<p class="program-row-divider">Distribuția:</p>
                            <div class="program-row">
                                <span class="program-name">Regia artistica, scenografia:</span>
                                <a href="#" class="program-person">Alexandru GRECU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Muzica:</span>
                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
                            </div>
                            <div class="program-row mb-30 bb-0">
                                <span class="program-name">Costume:</span>
                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
                            </div>
                            <p class="program-row-divider">Actorii</p>
                            <div class="program-row">
                                <span class="program-name">Ance</span>
                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Dragomir</span>
                                <a href="#" class="program-person">Ion GROSU</a>
                            </div>
                            <div class="program-row">
                                <span class="program-name">Gheorghe</span>
                                <a href="#" class="program-person">Gheorghe GUSAN</a>
                            </div>
                            <div class="program-row bb-0">
                                <span class="program-name">Ion</span>
                                <a href="#" class="program-person">Alexandru CRILOV</a>
                            </div>',
            ],
        ],
//        [
//            'name' => [
//                'ru' => 'Spectacle name 2',
//                'ro' => 'Spectacle name 2',
//                'en' => 'Spectacle name 2',
//            ],
//            'author' => [
//                'ru' => 'Spectacle Title 2',
//                'ro' => 'Spectacle Title 2',
//                'en' => 'Spectacle Title 2',
//            ],
//            'producer' => [
//                'ru' => 'Spectacle Title 2',
//                'ro' => 'Spectacle Title 2',
//                'en' => 'Spectacle Title 2',
//            ],
//            'description' => [
//                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
//                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
//                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
//            ],
//            'text_1' => [
//                'ru' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//                'ro' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//                'en' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//            ],
//        ],
//        [
//            'name' => [
//                'ru' => 'Spectacle name 3',
//                'ro' => 'Spectacle name 3',
//                'en' => 'Spectacle name 3',
//            ],
//            'author' => [
//                'ru' => 'Spectacle Title 3',
//                'ro' => 'Spectacle Title 3',
//                'en' => 'Spectacle Title 3',
//            ],
//            'producer' => [
//                'ru' => 'Spectacle Title 3',
//                'ro' => 'Spectacle Title 3',
//                'en' => 'Spectacle Title 3',
//            ],
//            'description' => [
//                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
//                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
//                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
//            ],
//            'text_1' => [
//                'ru' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//                'ro' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//                'en' => '<p class="program-row-divider">Distribuția:</p>
//                            <div class="program-row">
//                                <span class="program-name">Regia artistica, scenografia:</span>
//                                <a href="#" class="program-person">Alexandru GRECU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Muzica:</span>
//                                <a href="#" class="program-person">Anatol STEFANET (Formatia TRIGON)</a>
//                            </div>
//                            <div class="program-row mb-30 bb-0">
//                                <span class="program-name">Costume:</span>
//                                <a href="#" class="program-person">Rodica BARGAN, Lilia CARUTA</a>
//                            </div>
//                            <p class="program-row-divider">Actorii</p>
//                            <div class="program-row">
//                                <span class="program-name">Ance</span>
//                                <a href="#" class="program-person">Ludmila GHEORGHITA</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Dragomir</span>
//                                <a href="#" class="program-person">Ion GROSU</a>
//                            </div>
//                            <div class="program-row">
//                                <span class="program-name">Gheorghe</span>
//                                <a href="#" class="program-person">Gheorghe GUSAN</a>
//                            </div>
//                            <div class="program-row bb-0">
//                                <span class="program-name">Ion</span>
//                                <a href="#" class="program-person">Alexandru CRILOV</a>
//                            </div>',
//            ],
//        ],
    ];

    public function run()
    {
        $service = app(SpectacleService::class);

        foreach ($this->spectacles as $spectacle) {
            $spectacle['active'] = true;
            $spectacle['is_premiera'] = true;
            $spectacle['min_age'] = 12;
            $spectacle['duration'] = 120;
            $spectacle['start_at'] = now()->addWeek()->toDateString();
            $spectacle['schema_id'] = Schema::query()->first()->id;

            $spectacleModel = $service->createSpectacle(new StoreSpectacleRequest($spectacle));

            $spectacleModel
                ->addMediaFromUrl(asset("front/img/cart-ticket-img.png"))
                ->toMediaCollection('image_grid');

            $spectacleModel
                ->addMediaFromUrl(asset("front/img/heading-detail.jpg"))
                ->toMediaCollection('image_detail');

            $spectacleModel
                ->addMediaFromUrl(asset("front/img/heading-detail.jpg"))
                ->toMediaCollection('image_gallery');
            $spectacleModel
                ->addMediaFromUrl(asset("front/img/heading-detail.jpg"))
                ->toMediaCollection('image_gallery');
            $spectacleModel
                ->addMediaFromUrl(asset("front/img/heading-detail.jpg"))
                ->toMediaCollection('image_gallery');
        }

    }


}
