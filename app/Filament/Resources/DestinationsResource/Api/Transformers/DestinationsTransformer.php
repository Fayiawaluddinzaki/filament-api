<?php
namespace App\Filament\Resources\DestinationsResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DestinationsTransformer extends JsonResource
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
            'destination_name' => $this->destination_name,
        ];

    }
}
