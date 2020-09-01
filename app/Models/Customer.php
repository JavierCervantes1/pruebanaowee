<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $primaryKey = 'CustomerId';
    protected $fillable = ['FirstName', 'LastName', 'Email', 'Phone'];

    public function Address (){
        return $this->belongsToMany(Address::class , 'customer_address');
    }
	
    public function SalesOrder(){
        return $this->hasMany(SalesOrder::class);
    }
    
    public $timestamps = false;

}
