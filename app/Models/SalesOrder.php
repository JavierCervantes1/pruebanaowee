<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    protected $table = 'salesorder';

    protected $primaryKey = 'SalesOrderId';
    protected $fillable = ['OrderDate', 'Status', 'CustomerId', 'AddressId'];

    public $timestamps = false;
}
