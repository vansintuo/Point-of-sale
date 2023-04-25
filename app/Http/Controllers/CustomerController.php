<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Sale_Line;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CustomerController extends Controller
{
    //get data
    public function index()
    {
        $customers = Customer::query()->get();
        return view('customers.list_customers', [
            'customers' => $customers
        ]);
    }
    //create and insert data in form
    public function createForm(){
        $sale_line=Sale_Line::get();
        // return view('customers.add_customers');
        try{
            if($sale_line->add_new){
                return view('pos.pos');
            }
        }
        catch(\Exception){
            return view('customers.add_customers');
        }
    }
    public function insert_customers(Request $request){
        $no=$request->input('no');
        $name=$request->input('name');
        $name_2=$request->input('name_2');
        $address=$request->input('address');
        $address_2=$request->input('address_2');
        $phone_number=$request->input('phone_no');
        $phone_number_2=$request->input('phone_no_2');
        $salesperson=$request->input('salesperson_code');
        $inactived=$request->input('inactived');
        $data=array('no'=>$no,'name'=>$name,'name_2'=>$name_2,'address'=>$address,'address_2'=>$address_2,
        'phone_no'=>$phone_number,'phone_no_2'=>$phone_number_2,'salesperson_code'=>$salesperson,'inactived'=>$inactived );
        Customer::query('add_customers')->insert($data);
        return redirect('customers');
    }
    //edit and update customer 
    public function edit_customers($no){
        $customers =Customer::find($no);
        return view('customers.update_customers',compact('customers'));
    }
    public function update_customers(Request $request,$no){
        $customers=Customer::find($no);
        $customers->no=$request->input('no');
        $customers->name=$request->input('name');
        $customers->name_2=$request->input('name_2');
        $customers->address=$request->input('address');
        $customers->address_2=$request->input('address_2');
        $customers->phone_no=$request->input('phone_no');
        $customers->phone_no_2=$request->input('phone_no_2');
        $customers->salesperson_code=$request->input('salesperson_code');
        $customers->inactived=$request->input('inactived');
        $customers->save();
        try{    
            if($customers->update()){
                return redirect('customers')->with('status','Your data update success');
            }
        }catch(\Exception){
            return('Not Found');
        }
    }
    //delete customers
    public function delete_customers(Request $request){
        $customers=Customer::find($request->no);
        try{
            if($customers->delete()){
                return redirect()->back();
            }
        }catch(\Exception){
            return ('notFound');
        }
    }
    //return back
    public function back(){
        return view('customers.list_customers');
    }

}
