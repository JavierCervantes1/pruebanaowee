<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $primaryKey = 'AddressId';
    protected $fillable = ['AddressLine', 'City', 'StateProvince', 'CountryRegion'];

    public function Customer (){
        return $this->belongsToMany(Customer::class , 'customer_address');
    }
    
    public function SalesOrder(){
        return $this->hasMany(SalesOrder::class);
    }

    public $timestamps = false;
}
