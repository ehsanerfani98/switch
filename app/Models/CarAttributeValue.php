<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarAttributeValue extends Model
{
    protected $fillable = [
        'car_id',
        'attribute_id',
        'attribute_value_id',
        'value_string',
        'value_number',
        'value_boolean',
        'value_boolean_label',
        'sort_order'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class);
    }
}
