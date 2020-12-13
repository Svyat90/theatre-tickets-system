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
    private array $spectacle = [
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
        'description' => [
            'ru' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
            'ro' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
            'en' => 'Spectacle Content Spectacle Content Spectacle Content Spectacle Content  1',
        ]
    ];

    public function run()
    {
        $service = app(SpectacleService::class);

        $this->spectacle['active'] = true;
        $this->spectacle['is_premiera'] = true;
        $this->spectacle['min_age'] = 12;
        $this->spectacle['duration'] = 120;
        $this->spectacle['start_at'] = now()->addWeek()->toDateString();
        $this->spectacle['schema_id'] = Schema::query()->first()->id;

        $spectacle = $service->createSpectacle(new StoreSpectacleRequest($this->spectacle));

        $spectacle
            ->addMediaFromUrl(asset("front/img/home-slider-img.jpg"))
            ->toMediaCollection('image_grid');

        $spectacle
            ->addMediaFromUrl(asset("front/img/home-slider-img.jpg"))
            ->toMediaCollection('image_detail');

        $spectacle
            ->addMediaFromUrl(asset("front/img/home-slider-img.jpg"))
            ->toMediaCollection('image_gallery');

    }


}
