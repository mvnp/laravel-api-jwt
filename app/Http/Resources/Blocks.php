<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Blocks extends JsonResource
{
    public function toArray($request){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
            'enabled' => $this->enabled,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
