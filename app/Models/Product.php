<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'brand_id',
        'taxonomy_id',
        'name',
        'description',
        'price',
        'stock',
        'images',
        'slug'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
