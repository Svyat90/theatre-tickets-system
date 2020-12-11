<?php

namespace App\Services;

use App\Models\About;
use App\Helpers\MediaHelper;
use App\Http\Requests\UpdateAboutRequest;

class AboutService
{

    /**
     * @param UpdateAboutRequest $request
     */
    public function updateData(UpdateAboutRequest $request) : void
    {
        /** @var About $about */
        $about = About::query()->first();
        $about->update($request->all());

        $this->handleMediaFiles($request, $about);
    }

    /**
     * @param UpdateAboutRequest $request
     * @param About              $about
     */
    private function handleMediaFiles(UpdateAboutRequest $request, About $about) : void
    {
        MediaHelper::handleMedia($about, 'image_1', $request->image_1);
        MediaHelper::handleMedia($about, 'image_2', $request->image_2);
        MediaHelper::handleMedia($about, 'image_3', $request->image_3);
        MediaHelper::handleMedia($about, 'image_4', $request->image_4);
        MediaHelper::handleMediaCollect($about, 'image_gallery', $request->image_gallery);
    }

}
