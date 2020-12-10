<?php

namespace App\Http\Controllers\Front;

use App\Services\EmailService;
use App\Http\Controllers\FrontController;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Front\Emails\SendContactEmailRequest;
use App\Repositories\VarRepository;

class EmailController extends FrontController
{

    /**
     * @var EmailService
     */
    private EmailService $service;

    /**
     * @var VarRepository
     */
    private VarRepository $repository;

    /**
     * EmailController constructor.
     *
     * @param EmailService  $service
     * @param VarRepository $repository
     */
    public function __construct(EmailService $service, VarRepository $repository)
    {
        parent::__construct();
        $this->service = $service;
        $this->repository = $repository;
    }

    /**
     * @param SendContactEmailRequest $request
     *
     * @return RedirectResponse
     */
    public function sendContactForm(SendContactEmailRequest $request) : RedirectResponse
    {
        try {
            $this->service->sendEmailToAdmin($request);

            return redirect()
                ->back()
                ->with('message', $this->repository->getVar('contact_success_send'));

        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withErrors(['error' => $this->repository->getVar('contact_success_error')]);
        }
    }

}
