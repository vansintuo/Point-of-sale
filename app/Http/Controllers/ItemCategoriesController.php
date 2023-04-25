<?php

namespace App\Http\Controllers;
use App\Models\ItemCategories;
use Illuminate\Http\Request;

class ItemCategoriesController extends Controller
{
    
    public function index(){
        $item_c=ItemCategories::query()->get();
        return view('item_category.list_item_c',['item_c'=>$item_c]);
    }

    //add and insert form
    public function insert_form(){
        return view('item_category.add_item_c');
    }
    public function input_data(Request $request){
        $code =$request->input('code');
        $description=$request->input('description');
        $description_2=$request->input('description_2');
        $inactived=$request->input('inactived');
        $data=array('code'=>$code, 'description'=>$description, 'description_2'=>$description_2,'inactived'=>$inactived);
        ItemCategories::query('add_item_c')->insert($data);
        return redirect('item_category')->with('statuse','Success');
    }

    //edit and update
    public function edit_item_c($code)
    {
        $item_c = ItemCategories::find($code);
        return view('item_category.update_item_c', compact('item_c'));
    }
    public function update_item_c(Request $request, $code)
    {
        $item_c = ItemCategories::find($code);
        $item_c->code = $request->input('code');
        $item_c->description = $request->input('description');
        $item_c->description_2 = $request->input('description_2');
        $item_c->inactived = $request->input('inactived');
        $item_c->save();
        return redirect('item_category')->with('status', 'user update succes!');
    }

    //delete item group
    public function delete_items($code){
        $item_c= ItemCategories::find($code);
        $item_c->delete();
        return redirect()->back();
    }



    

}
