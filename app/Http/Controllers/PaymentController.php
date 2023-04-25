<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Sale_Line;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;

class PaymentController extends Controller
{
    //add to sales line
    // public function index()
    // {
    //     $payment = Sale_Line::query()->get();
    //     return view('report.pos', $payment);
    // }

    public function payment(Request $request)
    {
        $data = Sale_Line::get();
        $id=$request->find();
    }
}
