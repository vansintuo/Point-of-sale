<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\ItemMeasures;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ItemMeasuresController extends Controller
{
    public function index()
    {
        $item_measures = ItemMeasures::query()->get();
      
        return view('item_measures.list_item_measures',compact('item_measures')); 
    }
    //insert and add
    public function insert_form(){
        $item_no=Items::all();
        return view('item_measures.add_item_measures',compact('item_no'));
    }
    public function insert_itemsMeasures(Request $request){

        $id=$request->input('id');
        $item_no=$request->input('item_no');
        $unit_of_measure_code=$request->input('unit_of_measure_code');
        $identifier_code=$request->input('identifier_code');
        $description=$request->input('description');
        $description_2=$request->input('description_2');
        $qty_per_unit=$request->input('qty_per_unit:');
        $price=$request->input('price');
        $data=array('id'=>$id, 'item_no'=>$item_no,'unit_of_measure_code'=>$unit_of_measure_code,'identifier_code'=>$identifier_code,
        'description'=>$description,'description_2'=>$description_2, 'qty_per_unit'=>$qty_per_unit,'price'=>$price);
        ItemMeasures::query('add_item_measures')->insert($data);
        return redirect('item_unit_of_measures')->with('status','Add success');
    }


    //edit and update item_measures
    public function edit_items_measures($id){
        $item_measures=ItemMeasures::find($id);
        return view('item_measures.update_item_measures',compact('item_measures'));
    }
    public function update_item_measures(Request $request ,$id){
        $item_measures=ItemMeasures::find($id);
        $item_measures->item_no=$request->input('item_no');
        $item_measures->unit_of_measure_code=$request->input('unit_of_measure_code');
        $item_measures->identifier_code=$request->input('identifier_code');
        $item_measures->description=$request->input('description');
        $item_measures->description_2=$request->input('description_2');
        $item_measures->qty_per_unit=$request->input('qty_per_unit');
        $item_measures->price=$request->input('price');
        $item_measures->save();
        return redirect('item_unit_of_measures')->with('status', 'user update succes!');
        
    }

    //delete function 
    public function delete_item_unit( $id){
        $item_measures=ItemMeasures::find($id);
        $item_measures->delete();
        return redirect()->back();

    }
}
