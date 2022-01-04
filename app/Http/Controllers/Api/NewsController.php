<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller {

    public function index()
    {
        $news = News::latest()->paginate(2);

        return $this->apiResponse($news , 'news');
    }
}
