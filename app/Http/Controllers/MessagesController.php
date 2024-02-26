<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessagesResource;
use App\Models\Message;

class MessagesController extends Controller
{
    public function show(): MessagesResource
    {
        $message = Message::all();
        return new MessagesResource($message);
    }
}
