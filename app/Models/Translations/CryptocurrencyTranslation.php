<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class CryptocurrencyTranslation extends Model{

    protected $table = 'cryptocurrency_translations';
    protected $fillable = [
       'cryptocurrency_id',  'locale' ,  'name'
    ];

    public $timestamps = false;
}
