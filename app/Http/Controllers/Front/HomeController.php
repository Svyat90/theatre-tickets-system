<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Services\PageService;

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

    public function index()
    {
        return view('front.home', [
            'sliders' => $this->service->repository->getSliderList(),
            'quotes' => $this->service->repository->getQuotesList(),
            'assemblies' => $this->service->repository->getAssemblyList()
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
