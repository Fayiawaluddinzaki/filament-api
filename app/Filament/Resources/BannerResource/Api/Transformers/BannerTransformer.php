<?php
namespace App\Filament\Resources\BannerResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class BannerTransformer extends JsonResource
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
            'banner_image' => $this->banner_image,
            'banners_url' => $this->banners_url,
            'banners_sequence' => $this->banners_sequence,
            // 'banners_status' => $this->banners_status,
        ];
    }
}
