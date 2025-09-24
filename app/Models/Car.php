<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'gallery',
        'description'
    ];

    protected $casts = [
        'gallery' => "json",
    ];

    public function attributeValues()
    {
        return $this->hasMany(CarAttributeValue::class);
    }

    public function fileItemValues()
    {
        return $this->hasMany(CarFileItemValue::class);
    }

    public function setGalleryAttribute($value)
{
    if (is_string($value)) {
        $value = json_decode($value, true);
    }
    $this->attributes['gallery'] = json_encode($value);
}
}
