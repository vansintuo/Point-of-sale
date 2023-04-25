<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice(Request $request)
    {
        $cus_no=$request ->no;
        $invoice = Customer::where('name',)->first();
        return view();
    }


    //get and uodate
    public function Invoice_customers(Request $request, $no)
    {
        $customers = Customer::find($no);
        $customers->no = $request->input('no');
        $customers->name = $request->input('name');
        $customers->name_2 = $request->input('name_2');
        $customers->address = $request->input('address');
        $customers->address_2 = $request->input('address_2');
        $customers->phone_no = $request->input('phone_no');
        $customers->phone_no_2 = $request->input('phone_no_2');
        $customers->salesperson_code = $request->input('salesperson_code');
        $customers->inactived = $request->input('inactived');
        $customers->save();
        try {
            if ($customers->update()) {
                return redirect('customers')->with('status', 'Your data update success');
            }
        } catch (\Exception) {
            return ('Not Found');
        }
    }

}
