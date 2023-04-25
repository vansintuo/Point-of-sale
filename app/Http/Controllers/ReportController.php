<?php

namespace App\Http\Controllers;

use App\Models\Sale_Headers;
use App\Models\Sale_Line;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $sale_header = Sale_Line::all();
        $sale_line = Sale_Headers::all();
        $detail = DB::table('sales_line')
            ->select()
            // ->join('sales_header.id',)
            // ->join('')
            ->orderBy('sales_line.id')
            ->get();
        return view('pages.dashboard',compact(''));
    }
}
