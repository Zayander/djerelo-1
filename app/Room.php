<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'category_ru',
        'category_ua',
        'category_en',
        'type_ru',
        'type_ua',
        'type_en',
        'short_description_ru',
        'short_description_ua',
        'short_description_en',
        'full_description_ru',
        'full_description_ua',
        'full_description_en',
        'people_quantity',
        'img'
    ];

    public $timestamps = false;
}
