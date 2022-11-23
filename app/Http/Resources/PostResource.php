<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * @var bool
     */
    public $preserveKeys = true;
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'object' => $this->object,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
