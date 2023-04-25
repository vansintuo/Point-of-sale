<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Barcode;
use App\Models\Customer;
use App\Models\ItemMeasures;
use \Milon\Barcode\DNS1D;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarcodeController extends Controller
{
        public function index()
        {
                // $customer=Customer::all();
                $items = Items::all();
                $datatest = DB::table('item_unit_of_measures')
                        ->select('items.no', 'item_unit_of_measures.item_no', 'item_unit_of_measures.price', 'items.picture', 'items.unit_price', 'item_unit_of_measures.description')
                        ->join('items', 'items.no', '=', 'item_unit_of_measures.item_no')
                        ->join('unit_of_measures', 'item_unit_of_measures.unit_of_measure_code', '=', 'unit_of_measures.code')
                        // ->offset(0)
                        // ->limit(60)
                        ->orderBy('item_unit_of_measures.id')
                        ->get();
                // dd($datatest);
                return view('report.barcode', compact('datatest', 'items'));
        }

        public function store(Request $request)
        {
                $number = mt_rand(100000000, 999999999);
                if ($this->ItemCodeExite($number)) {
                        $number = mt_rand(100000000, 999999999);
                }


                $request['item_no'] = $number;

                ItemMeasures::create($request->all());

                return redirect('/');
        }
        public function productCodeExite($number)
        {
                $item = ItemMeasures::where('item_no', '=', $number);
                return ItemMeasures::whereItemCode('items_no', '=', $item);
        }
}
