<?php

namespace App\Http\Resources\Tech\Operation;

use Illuminate\Http\Resources\Json\JsonResource;

class TechOperationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'is_deleted' => $this->isDeleted,
            'is_harvested' => $this->isHarvested
        ];
    }
}
