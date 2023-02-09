<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    // according to the documentation we should be using this code; because this Laravel is an older version, we need to use the old syntax!
    /* protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    } */

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getPriceWithEuroAttribute()
    {
        return $this->attributes['price'] . ' €';
    }

    public function getPriceAttribute($value)
    {
        return $value;
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = strtolower($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
}
