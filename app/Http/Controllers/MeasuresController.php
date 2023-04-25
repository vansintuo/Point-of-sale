<?php

namespace App\Http\Controllers;

use App\Models\Measures;
use Illuminate\Http\Request;

class MeasuresController extends Controller
{
    public function index()
    {
        $measures = Measures::query()->get();
        return view('measures.list_measures', ['measures' => $measures]);
    }


    public function insert_form()
    {
        return view('measures.add_measures');
    }
    public function insert_measures(Request $request)
    {
        $code = $request->input('code');
        $description = $request->input('description');
        $description_2 = $request->input('description_2');
        $factor = $request->input('factor');
        $inactived = $request->input('inactived');
        $data = array('code' => $code, 'description' => $description, 'description_2' => $description_2, 'factor' => $factor, 'inactived' => $inactived);
        Measures::query('add_measures')->insert($data);
        return redirect('unit_of_measures')->with('status',' success');
    }   
    
    
    
    
    //edit and update measures
    public function edit_measures($code)
    {
        $measures = Measures::find($code);
        return view('measures.update_measuress', compact('measures'));
    }
    public function update_measures(Request $request, $code)
    {
        $measures = Measures::find($code);
        $measures->code = $request->input('code');
        $measures->description = $request->input('description');
        $measures->description_2 = $request->input('description_2');
        $measures->factor = $request->input('factor');
        $measures->inactived = $request->input('inactived');
        $measures->save();
        return redirect('unit_of_measures')->with('status', 'user update succes!');
    }

      //delete permission
      public function remove($code)
      {
         $measures= Measures:: find($code);
         $measures->delete();
        return redirect()->back();
      }
}
