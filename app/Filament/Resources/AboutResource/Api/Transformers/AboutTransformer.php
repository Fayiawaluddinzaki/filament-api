<?php
namespace App\Filament\Resources\AboutResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return $this->resource->toArray();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
