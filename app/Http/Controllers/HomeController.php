<?php

namespace App\Http\Controllers;

use App\Notifications\NewNotification;
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
        $title = 'title';
        $message = 'body';
        $res =$this->service->sendNotification($token,$title, $message);

        return response()->json([
           'msg' => $res
        ]);
    }

    public function sendAuth()
    {
        $user = auth()->user();
        $title = 'title';
        $body = 'body';
        $user->notify(new NewNotification(title: $title, body: $body));

        return response()->json([
           'msg' => 'done'
        ]);
    }
}
