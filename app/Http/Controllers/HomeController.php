<?php

namespace App\Http\Controllers;

use App\Notifications\FirebaseNotification;
use App\Services\FirebaseService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected $service = new FirebaseService()
    )
    {
    }

    public function send(Request $request)
    {
        $token = $request->get('token');
        $title = 'not Title';
        $message = 'notification!';
        $res =$this->service->sendNotification($token,$title, $message);

        return response()->json([
           'msg' => $res
        ]);
    }

    public function sendAuth()
    {
        $user = auth()->user();
        $title = 'title!';
        $body = 'Notification!';
        $type = 'web';
        $user->notify(new FirebaseNotification(title: $title, body: $body, type: $type));

        return response()->json([
           'msg' => 'done'
        ]);
    }

    public function manageToken(Request $request)
    {
        $user = auth()->user();
        $token = $request->get('token');
        $isSet = $request->get('isSet');
        $type = $request->get('type') ?:'' ;
        $user->fcmTokens()->updateOrCreate([
           'type' => $type
        ],[
            'enabled' => $isSet,
            'token' => $token
        ]);
        return response()->json([
           'success' => 1
        ]);

    }
}
