<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $data['customers'] = Customer::paginate();

        return view("customer.customer", $data);
    }

    public function create(){
        //return view();
    }

    public function edit($customerId){
        $customer = Customer::FindOrFail($customerId);

        return view('customer.edit', compact('customer'));
    }
    
    public function store(Request $request){
        $customerData = request()-> except('_token');
        Customer::insert($customerData);

        //return response()-> json($customerData);
        return redirect()->route('customer.index')->with('success','Customer Created Succesfully!');
    }

    public function update(Request $request, $customerId){
        $customerData = request()-> except(['_token', '_method']);
        Customer::where('CustomerId', '=', $customerId)->update($customerData);

        return redirect()->route('customer.index')->with('success','Customer Updated Succesfully!');
    }

    public function destroy(Request $request, $id){
        $customer = Customer::find($id);

        if ($customer->Address()->exists() || $customer->SalesOrder()->exists()){
            return redirect()->route('customer.index')->with('error','You cant delete this customer!');
            abort(401, 'Resource cannot be deleted due to existence of related resources.');
            
        }

        $customer->delete();
        return redirect()->route('customer.index')->with('success','Customer '.$customer->FirstName.' '.$customer->LastName. ' Deleted!');
    }
}
