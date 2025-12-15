<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'tittle',
        'decription',
        'content',
        'price',
        'image',
        'status',
        'idCategory'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'idCategory', 'id');
    }
}

