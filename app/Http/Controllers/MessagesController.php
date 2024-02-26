<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessagesResource;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function getMessage(Messages $messages): MessagesResource
    {
        return new MessagesResource($messages);
    }
}
