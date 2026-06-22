<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    protected $table = "Reviews";
    protected $fillable = [
        'product_id',
        'name',
        'review'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
