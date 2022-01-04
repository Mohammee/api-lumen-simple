<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alarm extends Model{

    use SoftDeletes;

    protected $table = 'coin_alarms';
    protected $fillable = [
        'generate_key',
        'coin_id',
        'operator_type',
        'value'
    ];

    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class , 'coin_id' , 'id');
    }
}
