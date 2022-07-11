<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Receipt extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];


    public static function boot()
    {
        parent::boot();

        // creation of automatic school id
        self::creating(function ($model) {
            $model->school_id =  IdGenerator::generate(['table' => 'users', 'field' => 'receipt_id', 'length' => 10, 'prefix' => 'AUM/' . date('y') . '/']);
        });
    }
}