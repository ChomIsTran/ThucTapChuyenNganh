<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table="products";
    protected $fillable = ['id','tittle','image','decription','content','price','status'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','idCategory','id');
    }

}
