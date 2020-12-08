<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Services\PageService;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Repositories\SpectacleRepository;

class HomeController extends Controller
{

    /**
     * @var PageService
     */
    private PageService $service;

    /**
     * HomeController constructor.
     *
     * @param PageService $service
     */
    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    /**
     * @param SpectacleRepository $spectacleRepository
     *
     * @return Application|Factory|View
     */
    public function index(SpectacleRepository $spectacleRepository)
    {
        return view('front.home', [
            'sliders' => $this->service->repository->getSliderList(),
            'quotes' => $this->service->repository->getQuotesList(),
            'assemblies' => $this->service->repository->getAssemblyList(),
            'gallery' => $this->service->repository->getGalleryList(),
            'spectacles' => $spectacleRepository->getListForHome()
        ]);
    }

    /**
     * @return RedirectResponse
     */
    public function redirectToHome() : RedirectResponse
    {
        return response()->redirectToRoute('front.home');
    }

}
