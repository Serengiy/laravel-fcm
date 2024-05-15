<?php

namespace App\Services;

use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;

class FirebaseService
{
    protected Messaging $messaging;

    public function __construct()
    {
        $firebase = (new Factory)
            ->withServiceAccount(storage_path('app/firebase/serviceAccountKey.json'));

        $this->messaging = $firebase->createMessaging();
    }

    public function sendNotification(string $token, string $title, string $body, $data = []): array
    {
        $message = CloudMessage::withTarget('token', $token)
            ->withNotification([
                'title' => $title,
                'body' => $body,
            ])
            ->withData($data);

        return $this->messaging->send($message);
    }

}
