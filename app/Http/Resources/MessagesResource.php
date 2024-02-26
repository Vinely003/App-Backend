<?php

namespace App\Http\Resources;

use App\Models\Message;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @mixin Message */
class MessagesResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return [
                    'name' => $item->name,
                    'message' => $item->message,
                ];
            })->toArray(),
        ];
    }
}
