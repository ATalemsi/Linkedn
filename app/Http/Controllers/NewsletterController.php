<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MailchimpMarketing\ApiClient;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        if ($this->isSubscribed($email)) {
            return to_route('user.entreprise')->with('info', 'You are already subscribed.');
        }

        $response = $this->addSubscriber($email);

        if ($response->id) {
            return to_route('user.entreprise')->with('success', 'You have been subscribed to our newsletter!');
        } else {
            return redirect()->back()->with('error', 'Failed to subscribe. Please try again later.');
        }
    }

    private function isSubscribed($email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us8'
        ]);

        try {
            $response = $mailchimp->lists->getListMember('5a39d2621d', md5(strtolower($email)));
            return !empty($response);
        } catch (\Exception $e) {
            return false;
        }
    }

    private function addSubscriber($email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us8'
        ]);

        return $mailchimp->lists->addListMember('5a39d2621d', [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
