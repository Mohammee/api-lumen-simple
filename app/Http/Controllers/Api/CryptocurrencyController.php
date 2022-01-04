<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CryptocurrencyResource;
use App\Models\Cryptocurrency;

class  CryptocurrencyController extends Controller{

    public function index()
    {
        $items = Cryptocurrency::paginate(2);
        $items = CryptocurrencyResource::collection($items);

        return $this->apiResponse( $items , 'data');
    }

    public function latest()
    {
        $items = Cryptocurrency::latest('updated_at')->get();
        return $this->apiResponse($items , 'latest');
    }
}
