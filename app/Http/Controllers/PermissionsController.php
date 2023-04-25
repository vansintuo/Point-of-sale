<?php

namespace App\Http\Controllers;
use App\Models\Permissions;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permissions::query()->get();
        return view('permissions.list_permissions', [
            'permissions' => $permissions
        ]); 
    }

    // insert permistion 
    public function insertPermissions(){
        return view('permissions.addpermission');
    }
    public function add_permissions(Request $request){
        $code=$request->input('code');
        $description=$request->input('description');
        $description_2=$request->input('description_2');
        $inactived=$request->input('inactived');
        $data=array('code'=>$code,'description'=>$description,'description_2'=>$description_2,'inactived'=>$inactived);
        Permissions::query('add_permissions')->insert($data);
        return redirect()->back();
    }
    //delete permission
    public function remove(Request $request)
    {
       $permissions= Permissions:: find($request->code);
       try{
        if($permissions->delete()){
            return redirect()->back();
        }      
       }catch(\Exception){
        return('not Found');
    }
    }
    //edit and update permission
    public function edit_permissions($code)
    {
        $permissions=Permissions::find($code);
        return view('permissions.update_permissions',compact('permissions'));
    }
    public function update_permissions(Request $request ,$code){ 
        $permissions=Permissions::find($code);
        $permissions->code = $request->input('code');
        $permissions-> description=$request->input('description');
        $permissions->description_2=$request->input('description_2');
        $permissions->inactived=$request->input('inactived');
        $permissions->save();
        return redirect('permissions')->with('status','user update succes!');
    }
}
