<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use App\Models\Customer;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesOrderController extends Controller
{
    public function index($CustomerId, $AddressId){
        $data['sales'] = SalesOrder::paginate();

        $customer = Customer::find($CustomerId);
        $address = Address::find($AddressId);

        return view('sales.salesOrder', $data, compact('customer', 'address'));
    }

    public function store(Request $request, $CustomerId, $AddressId){
        $data = request()->all();
        $orderDate = $data['OrderDate'];
        $status = $data['Status']; 

        DB::table('salesorder')->insert([
            'OrderDate' => $orderDate,
            'Status' => $status,
            'customer_CustomerId' => $CustomerId,
            'address_AddressId' => $AddressId,
        ]);

        $data['sales'] = SalesOrder::paginate();

        $customer = Customer::find($CustomerId);
        $address = Address::find($AddressId);

        return view('sales.salesOrder', $data, compact('customer', 'address'));
    }
}
