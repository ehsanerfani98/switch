<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description'
    ];

    public function attributeValues()
    {
        return $this->hasMany(CarAttributeValue::class);
    }
}
