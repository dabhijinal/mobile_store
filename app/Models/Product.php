<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //category_id,name,description,price,image,qty,status
    //cart : user_id,prod_id,qty,price

    protected $table = "Product";
    protected $fillable = ['category_id', 'name', 'description', 'price', 'qty', 'img', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function cart()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
