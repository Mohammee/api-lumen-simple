<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CryptocurrencyResource extends JsonResource{

    public function toArray($request)
    {
        return array_merge([
            'rank' => (int)$this->rank,
            'symbol' => $this->symbol,
            'name' => $this->name,
            'price_usd' => (double)$this->price_usd,
            'trading' => (double)$this->trading,
        ] , $this->getAllTransAttributes());
    }

}
