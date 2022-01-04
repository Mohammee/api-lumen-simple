<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlarmResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'Key' => $this->generate_key,
            'operator_type' => $this->operator_type,
            'value' => $this->value,
            'cryptocurrency' => CryptocurrencyResource::make($this->cryptocurrency)
        ];
    }
}
