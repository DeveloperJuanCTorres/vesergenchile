<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Taxonomy extends Model
{
    protected $fillable = [
        'name',
        'description',
        'images'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
