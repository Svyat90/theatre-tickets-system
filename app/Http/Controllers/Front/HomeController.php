<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\RedirectResponse;
use App\Services\PageService;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Repositories\SpectacleRepository;
use App\Repositories\Articles\ArticleRepository;
use App\Http\Controllers\FrontController;

class HomeController extends FrontController
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
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @param SpectacleRepository $spectacleRepository
     * @param ArticleRepository   $articleRepository
     *
     * @return Application|Factory|View
     */
    public function index(SpectacleRepository $spectacleRepository, ArticleRepository $articleRepository)
    {
        return view('front.home', [
            'sliders' => $this->service->repository->getSliderList(),
            'quotes' => $this->service->repository->getQuotesList(),
            'assemblies' => $this->service->repository->getAssemblyList(),
            'gallery' => $this->service->repository->getGalleryList(),
            'spectacles' => $spectacleRepository->getListForHome(),
            'articleVideo' => $articleVideo = $articleRepository->getArticleWithVideo(),
            'articles' => $articleRepository->getListToHome($articleVideo->id ?? null)
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
