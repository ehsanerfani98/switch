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
        'description',
        'status',
        'vip',
        'brand_id',
    ];

    protected $casts = [
        'gallery' => "json",
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    
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

    // متد دستی برای گرفتن مقدار
    public function valueOf($slugOrName)
    {
        return $this->attributeValues()->valueOf($slugOrName);
    }

    public function getGearboxAttribute()
    {
        return $this->valueOf('gearbox');
    }

    public function getKiloMeterAttribute()
    {
        return $this->valueOf('kilometer');
    }

    public function getPriceAttribute()
    {
        return $this->valueOf('price');
    }


}
