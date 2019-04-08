<?php

namespace App\Http\Resources\Tech\Type;

use Illuminate\Http\Resources\Json\JsonResource;

class TechOperationTypeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'en' => $this->en,
            'ru' => $this->ru
        ];
    }
}
