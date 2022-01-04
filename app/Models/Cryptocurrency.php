<?php

namespace App\Models;

use App\Lib\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cryptocurrency extends LocalizableModel
{
    use HasFactory;

    protected $localizable = ['name'];
//    protected $appendLangAttributes = true;

    protected $fillable = [
        'symbol', 'rank', 'price_usd', 'trading', 'status'
    ];

    protected $dates = [
        'created_at',
        'deleted_at'
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->rank = Cryptocurrency::max('rank') + 1;
        });
    }

}
