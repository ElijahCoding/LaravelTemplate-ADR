<?php

namespace App\Http\Resources\Tech\Type;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tech\Operation\TechOperationResource;

class TechOperationTypeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'en' => $this->en,
            'ru' => $this->ru,
            'tech_operations' => TechOperationResource::collection($this->whenLoaded('tech_operations'))
        ];
    }
}
