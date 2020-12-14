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
                'ru' => 'Spectacle name 1',
                'ro' => 'Spectacle name 1',
                'en' => 'Spectacle name 1',
            ],
            'author' => [
                'ru' => 'Spectacle Title 1',
                'ro' => 'Spectacle Title 1',
                'en' => 'Spectacle Title 1',
            ],
            'producer' => [
                'ru' => 'Spectacle Title 1',
                'ro' => 'Spectacle Title 1',
                'en' => 'Spectacle Title 1',
            ],
            'description' => [
                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
            ]
        ],
        [
            'name' => [
                'ru' => 'Spectacle name 2',
                'ro' => 'Spectacle name 2',
                'en' => 'Spectacle name 2',
            ],
            'author' => [
                'ru' => 'Spectacle Title 2',
                'ro' => 'Spectacle Title 2',
                'en' => 'Spectacle Title 2',
            ],
            'producer' => [
                'ru' => 'Spectacle Title 2',
                'ro' => 'Spectacle Title 2',
                'en' => 'Spectacle Title 2',
            ],
            'description' => [
                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  2',
            ]
        ],
        [
            'name' => [
                'ru' => 'Spectacle name 3',
                'ro' => 'Spectacle name 3',
                'en' => 'Spectacle name 3',
            ],
            'author' => [
                'ru' => 'Spectacle Title 3',
                'ro' => 'Spectacle Title 3',
                'en' => 'Spectacle Title 3',
            ],
            'producer' => [
                'ru' => 'Spectacle Title 3',
                'ro' => 'Spectacle Title 3',
                'en' => 'Spectacle Title 3',
            ],
            'description' => [
                'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
                'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
                'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  3',
            ]
        ],
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
                ->addMediaFromUrl(asset("front/img/cart-ticket-img.png"))
                ->toMediaCollection('image_detail');

            $spectacleModel
                ->addMediaFromUrl(asset("front/img/cart-ticket-img.png"))
                ->toMediaCollection('image_gallery');
        }

    }


}
