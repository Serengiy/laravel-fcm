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
        $res = $user->notify(new NewNotification);
        return response()->json([
           'msg' => 'done'
        ]);
    }
}
