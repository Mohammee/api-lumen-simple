<?php

namespace App\Models;

use App\Lib\LocalizableModel;

class News extends LocalizableModel{

    protected $localizable = [
        'title' , 'description'
    ];

    protected $fillable = ['images'];

    protected $dates  = [
        'created_at' , 'deleted_at'
    ];

    public function getCreatedAtAttribute()
    {
      return date('Y-m-d g:i')  ;
    }

    public function getUpdatedAtAttribute()
    {
        return date('Y-m-d g:i')  ;
    }


}
