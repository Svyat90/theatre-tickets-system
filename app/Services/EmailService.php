<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Front\Emails\SendContactEmailRequest;
use App\Repositories\VarRepository;
use Illuminate\Support\Facades\Log;

class EmailService
{

    /**
     * @var VarRepository
     */
    private VarRepository $varRepository;

    /**
     * EmailService constructor.
     *
     * @param VarRepository $varRepository
     */
    public function __construct(VarRepository $varRepository)
    {
        $this->varRepository = $varRepository;
    }

    /**
     * @param SendContactEmailRequest $request
     */
    public function sendEmailToAdmin(SendContactEmailRequest $request) : void
    {
        $data = [
            'name' => $request->name,
            'firstName' => $request->first_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'body' => $request->message
        ];

        Mail::send('mails.contact', $data, function ($message) {
            $message
                ->to($this->varRepository->getVar('contact_email'))
                ->subject('Contact Form');
        });

        $this->checkFailures();
    }

    /**
     * @param array  $mailData
     * @param string $name
     * @param string $emailTo
     */
    public function sendTicketsToUser(array $mailData, string $name, string $emailTo) : void
    {
        $data = [
            'data' => $mailData
        ];

        $reservedStr = (new VarRepository())->getVar('email_reserved_tickets_for');

        Mail::send('mails.tickets', $data, function ($message) use ($name, $emailTo, $reservedStr) {
            $message
                ->to($emailTo)
                ->subject(config('app.name') . ' - ' . $reservedStr . ' - ' . $name);
        });

        $this->checkFailures();
    }

    private function checkFailures() : void
    {
        $failures = Mail::failures();
        if (count($failures) > 0) {
            Log::error(json_encode($failures));
            foreach($failures as $emailAddress) {
                $msg = 'Error send mail: ' . $emailAddress;
                Log::error($msg);
            }
        }
    }
}
