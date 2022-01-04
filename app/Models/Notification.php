<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Notification extends Model
{

    protected $casts = [
        'read_at' => 'timestamp',
        'data' => 'array'
    ];

    protected $fillable = ['key', 'type', 'read_at' , 'data'];

    protected static function boot()
    {
        static::creating(function ($model) {
            $model->type = self::class;

            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }

        });

        parent::boot();
    }


//    public function setDataAttribute($value)
//    {
//        $this->attributes['data'] = json_encode($value);
//    }
//
//    public function getDataAttribute()
//    {
//        return json_decode($this->data ,true );
//    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
