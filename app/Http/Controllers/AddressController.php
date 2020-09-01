<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{

    public function index($addresId, $customerId){
        $customer = Customer::find($customerId);

        $addresses = Address::paginate();
        return view('address.customeraddress', compact('addresses', 'customer'));
    }

    public function store(Request $request, $customerId){
        $data = request()->all();
        $addressLine = $data['AddressLine'];
        $city = $data['City']; 
        $stateProvince = $data['StateProvince'];
        $countryRegion = $data['CountryRegion'];

        $address = Address::create([
            'AddressLine' => $addressLine,
            'City' => $city,
            'StateProvince' => $stateProvince,
            'CountryRegion' => $countryRegion
        ]);

        $addressId = $address->AddressId;

        DB::table('customer_address')->insert([
            'customer_CustomerId' => $customerId,
            'address_AddressId' => $addressId,
        ]);

        $data['addresses'] = Address::paginate();
        $customer = Customer::find($customerId);
        
        return view('address.customeraddress', $data)->withCustomer($customer);
    }

    public function edit($addressId, $customerId){
        $address = Address::FindOrFail($addressId);
        $customer = Customer::find($customerId);
        return view('address.edit', compact('address', 'customer'));
    }

    public function update(Request $request, $addressId, $customerId){
        $addressData = request()-> except(['_token', '_method']);
        Address::where('AddressId', '=', $addressId)->update($addressData);

        $addresses = Address::paginate();
        $customer = Customer::find($customerId);
        return view('address.customeraddress', compact('addresses', 'customer'));
    }

    public function getCustomer($CustomerId){
        $customer = Customer::find($CustomerId);

        $data['addresses'] = Address::paginate();
        return view('address.customeraddress', $data)->withCustomer($customer);

    }
}
