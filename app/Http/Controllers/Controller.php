<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponseBuilder;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use ApiResponseBuilder;
}
