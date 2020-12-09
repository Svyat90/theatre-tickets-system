<?php

namespace App\Http\Controllers\Front;

use App\Services\PageService;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\Foundation\Application;
use App\Http\Controllers\FrontController;
use App\Http\Requests\Front\Pages\ShowPageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends FrontController
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
     * @param Page            $page
     *
     * @return Application|Factory|View
     */
    public function show(Page $page)
    {
        return view('front.pages.show', compact('page'));
    }

    /**
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function contacts(Request $request)
    {
        return view('front.pages.contacts');
    }

    public function cart(Request $request) {}

    public function account(Request $request) {}

}
