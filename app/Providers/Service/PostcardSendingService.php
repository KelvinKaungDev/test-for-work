<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\Mail;


class PostcardSendingService {

    private $country;
    private $width;
    private $height;

    public function __construct($country, $width, $height)
    {
        $this -> country = $country;
        $this -> height = $height;
        $this -> width = $width;
    }

    public function hello($message, $email)
    {
        Mail::raw($message, function ($message) use ($email) {
            $message->to($email);
        });

        dump('This message is sent to the' . $message);
    }

}
