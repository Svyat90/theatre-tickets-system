<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\Workers\WorkerCategoryRepository;
use App\Services\Workers\WorkerService;
use App\Models\Workers\WorkerCategory;
use App\Http\Requests\Workers\Worker\StoreWorkerRequest;

class WorkerSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $worker = [
        'name' => [
            'ru' => 'ALEXANDRU GRECU',
            'ro' => 'ALEXANDRU GRECU',
            'en' => 'ALEXANDRU GRECU',
        ],
        'title' => [
            'ru' => 'Artist Emerit',
            'ro' => 'Artist Emerit',
            'en' => 'Artist Emerit',
        ]
    ];

    public function run()
    {
        $this->seedCategories();
        $this->seedWorkers();
    }

    private function seedCategories() : void
    {
        $repository = new WorkerCategoryRepository;

        $repository->saveWorkerCategory([
            'name' => [
                'ru' => 'Акторы',
                'ro' => 'Actorii',
                'en' => 'Actors',
            ],
            'active' => true
        ]);

        $repository->saveWorkerCategory([
            'name' => [
                'ru' => 'Администрацыя',
                'ro' => 'Administratia',
                'en' => 'Administration',
            ],
            'active' => true
        ]);
    }

    private function seedWorkers() : void
    {
        $service = app(WorkerService::class);
        $min = WorkerCategory::query()->min('id');
        $max = WorkerCategory::query()->max('id');

        $i = 0;
        while ($i < 4) {
            $this->worker['worker_category_id'] = rand($min, $max);
            $this->worker['active'] = true;
            $this->worker['on_home'] = true;
            if ($i === 0) {
                $this->worker['on_top'] = true;
            }
            $page = $service->createWorker(new StoreWorkerRequest($this->worker));
            $i++;

            $page
                ->addMediaFromUrl(asset($i % 2 == 0 ? 'front/img/actorii-team-member.jpg' : 'front/img/actorii-director.png'))
                ->toMediaCollection('image');
        }
    }
}
