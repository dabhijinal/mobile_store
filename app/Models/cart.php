<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['product_id', 'qty'];

    public function product()
    {
        return $this->hasMany(cart::class, 'product_id');
    }
}
