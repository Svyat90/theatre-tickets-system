<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Traits\MediaUploadingTrait;
use App\Models\About;
use App\Services\AboutService;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends AdminController
{
    use MediaUploadingTrait;

    /**
     * @var AboutService
     */
    private AboutService $service;

    /**
     * AboutController constructor.
     *
     * @param AboutService    $service
     */
    public function __construct(AboutService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * @return Application|Factory|View
     */
    public function edit()
    {
        $about = About::query()->first();

        return view('admin.about.edit', compact('about'));
    }

    /**
     * @param UpdateAboutRequest $request
     *
     * @return RedirectResponse
     */
    public function update(UpdateAboutRequest $request)
    {
        $this->service->updateData($request);

        return redirect()->route('admin.about.edit');
    }

}
