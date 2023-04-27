<?php

namespace App\Http\Controllers;

use App\Models\Sale_Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\ItemMeasures;
use App\Models\Items;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth;
use App\Models\Sale_Headers;

class SaleLineController extends Controller
{


    //get salelien
    public function index_sale()
    {
        $sales_line = Sale_Line::query()->get();
        return view('report.print', [
            'sales_line' => $sales_line
        ]);
    }



    // get customer 
    public function index()
    {
        $customer = Customer::all();
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
        return view('pos.pos', compact('datatest', 'customer', 'items'));
    }


    //create sale line


    public function add_sales_lines(Request $request)
    {
        // dd($request->all());

        $data = new Sale_Line();

        $header = Sale_Headers::latest()->first();

        if ($header != null) {
            $data->document_no = $header->id;
        } else {
            $data->document_no = 1;
        }


        $data->item_no = $request->item_no;

        $data->item_description = $request->item_description;
        // $data->item_desciption_2 = $request->item_desciption_2;
        // $data->unit_of_measure = $request->unit_of_measure;
        // $data->qty_per_unit_of_measure = $request->qty_per_unit_of_measure;
        $data->quantity = $request->quantity;
        // $data->discount_percentage = $request->discount_percentage;
        $data->discount_amount = $request->discount_amount;
        $data->amount = $request->amount;
        // $data->amount_lcy = $request->amount_lcy;
        // $data->item_category_code = $request->item_category_code;
        // $data->item_group_code = $request->item_group_code;
        $data->save();
        // dd($data);
        return response()->json([]);
    }


    // insert customer 
    public function insert_customers(Request $request)
    {
        $no = $request->input('no');
        $name = $request->input('name');
        $name_2 = $request->input('name_2');
        $address = $request->input('address');
        $address_2 = $request->input('address_2');
        $phone_number = $request->input('phone_no');
        $phone_number_2 = $request->input('phone_no_2');
        $salesperson = $request->input('salesperson_code');
        $inactived = $request->input('inactived');
        $data = array(
            'no' => $no, 'name' => $name, 'name_2' => $name_2, 'address' => $address, 'address_2' => $address_2,
            'phone_no' => $phone_number, 'phone_no_2' => $phone_number_2, 'salesperson_code' => $salesperson, 'inactived' => $inactived
        );
        Customer::query('add_customers')->insert($data);
        return redirect('sales_lines');
    }

    // insert customer to sale header
    public function add_customers($id)
    {

        $customer = Customer::where('no', $id)->get();
        $data_c = new Sale_Headers();

        $header = Sale_Headers::latest()->first();

        if ($header != null) {
            $data_c->no = $header->id + 1;
        } else {
            $data_c->no = 1;
        }

        $data_c->customer_no = $customer[0]->no;
        $data_c->customer_name = $customer[0]->name;
        $data_c->customer_name_2 = $customer[0]->name_2;
        $data_c->address = $customer[0]->address;
        $data_c->order_date = now("Asia/Phnom_Penh")->format('Y-m-d');
        $data_c->order_datetime = now("Asia/Phnom_Penh")->format('Y-m-d H:i:s');
        $data_c->save();

        // kak code
        // return response()->json([]);

        return $header->id + 1;
    }

    // public function index_h(Request $request){

    // }

    //for search 
    public function search1(Request $request)
    {
        $output = "";
        $pos = DB::table('item_unit_of_measures')
            ->select('items.no', 'item_unit_of_measures.item_no', 'item_unit_of_measures.id', 'item_unit_of_measures.price', 'items.picture', 'items.unit_price', 'items.description', 'items.description_2', 'item_unit_of_measures.unit_of_measure_code', 'item_unit_of_measures.qty_per_unit', 'items.item_category_code', 'items.item_group_code')
            ->join('items', 'items.no', '=', 'item_unit_of_measures.item_no')
            ->join('unit_of_measures', 'item_unit_of_measures.unit_of_measure_code', '=', 'unit_of_measures.code')
            ->offset(0)
            ->limit(60)
            ->where('item_unit_of_measures.item_no', 'like', '%' . $request->search . '%')
            ->get();

        foreach ($pos as $key => $poss) {
            if ($poss->picture == null) {
                $url = asset("/img/");
            } else {
                $url = asset("img/$poss->picture");
            }
            $cut = number_format($poss->price, 1);
            // $cut = Str::limit($poss->price,4); kak code kom write tam ng
            $output .=
                '<div class="col-xl-3 col-lg-4 col-md-6 mb-4 product-box ">' .
                '<div class="bg-white rounded shadow-sm add-cart" >' .
                '<img src=' . $url . ' alt="Wireless earbud" class="product-img">' .
                '<div class="p-4">' .
                '<p class="item_no"> ' . $poss->item_no . '</p>' .
                '<p class="product_title">' . $poss->description . '</p>' .
                '<p class="price" >' . $cut . '</p>' .
                ' </div> ' .
                '<button class="btn bg-primary btn_add" type="submit">Add</button>' .
                '</div>' .
                '</div>';
        }
        // dd($output);
        // return Response($output);
        return response($output);
    }

    public function showedits($no)
    {
        $data = Sale_Line::find($no);
        return response()->json([
            'data' => $data,
        ]);
        //return redirect()->back();
    }


    public function view_invoice($id)
    {
        $order = Sale_Line::find($id);
        return redirect('report.payment', compact('order'));
    }

    public function receipt(Request $request)
    {

        $sale_header = Sale_Headers::where('no', request('id'))->get();
        // Select * From sale_header where no = 10 tuk oy ah o mer
        $sale_line = Sale_Line::where('document_no', request('id'))->get();

        // tuk oy ah o mer tt
        // dd($sale_header, $sale_line);

        return view('report.print', compact('sale_header', 'sale_line'));
    }
}
