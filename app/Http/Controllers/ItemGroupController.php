<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroup;
class ItemGroupController extends Controller
{
    public function index(){
        $item_groups=ItemGroup::query()->get();
        return view('item_groups.list_item_groups',['item_groups'=>$item_groups]);
    }

    //creat and insert
    public function create_form(){
        return view('item_groups.add_item_groups');
    }
    public function insert_form(Request $request){
        $code =$request->input('code');
        $description=$request->input('description');
        $description_2=$request->input('description_2');
        $item_brand_code=$request->input('item_brand_code');
        $item_category_code=$request->input('item_category_code');
        $inactived=$request->input('inactived');
        $data=array('code'=>$code, 'description'=>$description, 'description_2'=>$description_2,
        'item_brand_code'=>$item_brand_code,'item_category_code'=>$item_category_code,'inactived'=>$inactived);
        ItemGroup::query('add_item_groups')->insert($data);
        return redirect('item_groups')->with('statuse','Success');

    }

    //edit And update 
    public function edit_item_groups($code){
        $item_groups=ItemGroup::find($code);
        return view('item_groups.update_item_groups',compact('item_groups'));
    }
    public function update_item_groups(Request $request ,$code){
        $item_groups=ItemGroup::find($code);
        $item_groups->code=$request->input('code');
        $item_groups->description=$request->input('description');
        $item_groups->description_2=$request->input('description_2');
        $item_groups->item_brand_code=$request->input('item_brand_code');
        $item_groups->item_category_code=$request->input('item_category_code');
        $item_groups->inactived=$request->input('inactived');
        $item_groups->save();
        return redirect('item_groups')->with('status','user update succes!');

    }

    //delete Item_G
    public function delete_item_G($code){
        $item_groups= ItemGroup::find($code);
        $item_groups->delete();
        return redirect()->back();
    }

}
