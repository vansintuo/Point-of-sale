<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Yajra\DataTables\Facades\DataTables;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Items::get();
        if ($request->ajax()) {
            $allData = DataTables::eloquent($items)
                ->addIdexColum()
                ->addColum('action', function ($row) {
                    $btn = ' <a href="javascript:void(0)" data-tooltip="tooltip" 
                data-id="' . $row->no . '" data-original-title="Edit" class="edit btn btn-success btn-sm btn-icon-text editItem"> Edit</a>';
                    $btn .= ' <a href="javascript:void(0)" data-tooltip="tooltip" 
                data-id="' . $row->no . '" data-original-title="Delete" class="delete btn btn-danger btn-sm btn-icon-text editItem"> Delete</a>';
                    return $btn;
                })
                ->rawColumn(['action', 'product_brand_logo'])
                ->make(true);
            return $allData;
        }
        return view('ajax.ajax_test', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
