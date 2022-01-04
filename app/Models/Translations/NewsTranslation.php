<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model{

    protected $table = 'news_translations';
    protected $fillable = [
        'news_id' , 'locale' , 'name' , 'description'
    ];

    public $timestamps = false;
}
