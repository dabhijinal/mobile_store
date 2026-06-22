<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'address';

    protected $fillable = [
        'user_id',
        'fullname',
        'mobile',
        'address',
        'city',
        'state',
        'pincode',
        'landmark',
    ];
}
