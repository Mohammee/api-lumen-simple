<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Currency;

class  CurrencyController extends Controller{

    public function index()
    {
        $items = Currency::paginate(2);
//        $items = Currency::get();

        return $this->apiResponse($items , 'currencies');
    }
}
