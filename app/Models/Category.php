<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "Category";

    protected $fillable = ['name', 'icon', 'status'];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
