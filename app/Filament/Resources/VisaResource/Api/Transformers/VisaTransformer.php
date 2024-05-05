<?php
namespace App\Filament\Resources\VisaResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class VisaTransformer extends JsonResource
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
            'visa_name' => $this->visa_name,
            'visa_type' => $this->visa_type,
            'visa_expiry_date' => $this->visa_expiry_date,
            'visa_price' => $this->visa_price,
            'visa_description' => $this->visa_description,
            // 'publish_status' => $this->publish_status,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
