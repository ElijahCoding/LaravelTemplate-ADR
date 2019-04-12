<?php

namespace App\Http\Resources\Tech\Operation;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tech\Type\TechOperationTypeResource;

class TechOperationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'is_deleted' => $this->isDeleted,
            'is_harvested' => $this->isHarvested,
            'tech_operation_type' => new TechOperationTypeResource($this->whenLoaded('tech_operation_type'))
        ];
    }
}
