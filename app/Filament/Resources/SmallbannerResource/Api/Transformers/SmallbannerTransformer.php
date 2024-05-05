<?php
namespace App\Filament\Resources\SmallbannerResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SmallbannerTransformer extends JsonResource
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
            'small_banners_image' => $this->small_banners_image,
            'small_banners_url' => $this->small_banners_url,
            'small_banners_sequence' => $this->small_banners_sequence,
        ];
    }
}
