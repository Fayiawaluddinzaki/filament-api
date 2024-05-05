<?php
namespace App\Filament\Resources\ContactResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactTransformer extends JsonResource
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
            'contact_type' => $this->contact_type,
            'display_name' => $this->display_name,
            'contact_number' => $this->contact_number,
        ];
    }
}
