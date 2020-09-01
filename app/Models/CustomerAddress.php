<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $table = 'customer_address';

    protected $fillable = ['customer_CustomerId', 'address_AddressId'];

    public $timestamps = false;
}
