<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $cast = [
        'published_at' => 'date',
    ];

    protected $guarded = [];

    function registerMediaCollections(): void
    {
        $this->addMediaCollection('news')->singleFile();;
    }


    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleted(function ($news) {
    //         $news->trixRichText->each->delete();
    //         $news->trixAttachments->each->purge();
    //     });
    // }
}