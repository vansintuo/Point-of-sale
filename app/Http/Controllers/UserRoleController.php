<?php

namespace App\Http\Controllers;
use App\Models\User_role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    //query data
    public function index(){
        $user_roles = User_role::query()->get();
        return view('user_roles.user_role',[
            'user_roles' => $user_roles
        ]);
    }

    //insert and show
    public function insertForm(){
        return view('user_roles.add_userRole');
    }
    public function insert(Request $request){
        $code= $request->input('code');
        $description= $request->input('description');
        $description_2=$request->input('description_2');
        $inactived=$request-> input('inactived');
        $data=array('code'=>$code,'description'=>$description,'description_2'=>$description_2,'inactived'=>$inactived);
        User_role::query('user_roles')->insert($data);
        return redirect('user_roles')->with('success for add');
    }

    //delete function
    public function delete_userRole(Request $request){
        $user_roles=User_role::find($request->code);    
        try {
            if ($user_roles->delete()) {
                return redirect('user_roles')->with('massage', 'User delete');
            }
        } catch (\Exception) {
            return ("not found");
        }
    }
    
    //update and edit function
    public function update_userRole(Request $request,$code){
        $user_role= User_role::find($code);
        $user_role->code=$request->input('code');
        $user_role->description=$request->input('description');
        $user_role->description_2=$request->input('description_2');
        $user_role->update();
        return redirect('user_roles')->with('massage', 'User delete');        
    }
    public function edit_userRole($code)
    {       
        $user_roles = User_role::find($code);
        return view('user_roles.update_userRole',compact('user_roles'));
    }


}
