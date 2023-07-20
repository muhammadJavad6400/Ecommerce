<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;
use Ghasedak\Laravel\GhasedakFacade;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {
        //dd($notifiable, $notification->code);

        $receptor = $notifiable->cellphone;
        $type = GhasedakFacade::VERIFY_MESSAGE_TEXT;
        $template = "Mufateh";
        $param1 = $notification->code;

        $response = GhasedakFacade::setVerifyType($type)->Verify($receptor, $template, $param1);
    }
}
