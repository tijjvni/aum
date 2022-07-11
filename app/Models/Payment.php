<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        // creation of automatic school id
        self::creating(function ($model) {
            $model->receipt_id =  IdGenerator::generate(['table' => 'payments', 'field' => 'receipt_id', 'length' => 10, 'prefix' => 'AUM/' . date('y') . '/']);
        });
    }
}