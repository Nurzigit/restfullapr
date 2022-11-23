<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Post extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * @var string
     */
    public $collects = Post::class;
    public function toArray($request)
    {
        $count = $this->collection->count();
        return [
            'data' => $this->collection,
            'count' => $count
        ];
    }
}
