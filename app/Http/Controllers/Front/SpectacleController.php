<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Models\Spectacle;
use App\Repositories\CategoryRepository;
use App\Http\Requests\Front\Spectacles\IndexSpectacleRequest;
use App\Services\Spectacles\SpectacleService;
use App\Helpers\CollectionHelper;

class SpectacleController extends Controller
{

    /**
     * @param IndexSpectacleRequest $request
     * @param SpectacleService   $service
     * @param CategoryRepository    $categoryRepository
     *
     * @return Application|Factory|View
     */
    public function index(IndexSpectacleRequest $request, SpectacleService $service, CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->getCollectionToIndex();
        $spectacles = CollectionHelper::paginate($service->getCategoryList($request->category_id), 1)
            ->appends([
                'category_id' => $request->category_id
            ]);;

        return view('front.spectacles.index', compact('spectacles', 'categories'));
    }

    /**
     * @param Spectacle $spectacle
     *
     * @return Application|Factory|View
     */
    public function show(Spectacle $spectacle)
    {
        return view('front.spectacles.show', compact('spectacle'));
    }

}
