<?php

namespace App\Http\Controllers;

use App\Models\Items;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::query()->get();
        return view('items.list_items', ['items' => $items]);
    }
    //insert items
    public function create_form()
    {
        return view('items.add_items');
    }
    public function insert_items(Request $request)
    {
        $no = $request->input('no');
        $no_2 = $request->input('no_2');
        $description = $request->input('description');
        $description_2 = $request->input('description_2');
        $item_group_code = $request->input('item_group_code');
        $item_category_code = $request->input('item_category_code');
        $unit_price = $request->input('unit_price');
        $inactived = $request->input('inactived');
        $remark = $request->input('remark');
        $picture = "";
        if ($request->has('picture')) {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file->move(public_path('img'), $filname);
            $picture = $filname;
        }
        $data = array('no' => $no, 'no_2' => $no_2, 'description' => $description, 'description_2' => $description_2, 'item_group_code' => $item_group_code, 'unit_price' => $unit_price, 'item_category_code' => $item_category_code, 'inactived' => $inactived, 'picture' => $picture, 'remark' => $remark);
        Items::query('add_items')->insert($data);
        return redirect('items')->with('status', 'Add success');
    }

    //delete items 
    public function delete_items($no)
    {
        $items = Items::find($no);
        $items->delete();
        return response()->json([]);
        //return redirect()->back();
    }
    ///Function show item 
    public function showedits($no)
    {
        $data = Items::find($no);
        return response()->json([
            'data' => $data,
        ]);
        //return redirect()->back();
    }
    //edit and update permission
    public function edit_items($code)
    {
        $items = Items::find($code);
        return view('items.update_items', compact('items'));
    }
    public function update_items(Request $request, $no)
    {
        $items = Items::find($no);
        $items->no = $request->input('no');
        $items->no_2 = $request->input('no_2');
        $items->description = $request->input('description');
        $items->description_2 = $request->input('description_2');
        $items->item_group_code = $request->input('item_group_code');
        $items->item_category_code = $request->input('item_category_code');
        $items->inactived = $request->input('inactived');
        $items->picture = $request->input('picture');
        $items->save();
        return response()->json([]);
    }

    //test
    public function test(Request $request)
    {
        if ($request->ajax()) {
            $data = Items::latest()->get();
            return DataTables::eloquent(Items::query())
                ->addIndexColumn()
                ->addColumn('product_brand_logo', function ($product_brand) {
                    if ($product_brand->picture == null) {
                        $url = asset("img/1676966862.jpg");
                    } else {
                        $url = asset("img/$product_brand->picture");
                    }
                    return '<img src=' . $url . ' border="0" width="40" class="img-rounded" align="center" />';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '<a  class="btn btn-success btn-sm btn-icon-text edit" > Edit</a>
                         <a class="btn btn-danger btn-sm btn-icon-text delete" value=> Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'product_brand_logo'])
                ->make(true);
        }
    }


    //for search
    public function search()
    {
        $search_text = $_GET['query'];
        $items = Items::where('no', 'Like', '%' . $search_text . '%')->get();
        return view('pos.search', compact('items'));
    }
}
