<?php
namespace App\Filament\Resources\ToursResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ToursTransformer extends JsonResource
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
            'tour_name' => $this->tour_name,
            'tour_type' => $this->tour_type,
            'destination_id' => $this->destination_id,
            'tour_price' => $this->tour_price,
            'tour_duration' => $this->tour_duration,
            'tour_description' => $this->tour_description,
            'tour_itinerary' => $this->tour_itinerary,
            'tour_image' => $this->tour_image,
            // 'tour_status' => $this->tour_status,
        ];
    }
}
