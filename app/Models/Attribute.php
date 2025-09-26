<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'label',
        'icon',
        'type',
        'is_multiple',
        'show_in_card',
        'format_thousands',
        'is_active',
        'sort_order'
    ];

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

    public function carValues()
    {
        return $this->hasMany(CarAttributeValue::class);
    }


}
