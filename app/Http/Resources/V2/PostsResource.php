<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'post_name' => $this->title,
            'author' => [
                'name'=>$this->user->name,
                'email'=>$this->user->email,
            ],
            'ceated_at' => $this->publisehd_at
        ];
    }
}
