<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::query()->get();
        return view('users.user_table', [
            'users' => $users
        ]);
    }
    //delete User
    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    
    public function insertform()
    {
        return view('users.add_user');
    }
    public function insert(Request $request)
    {
        $salesperson = $request->input('salesperson_code');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $city = $request->input('city_name');
        $email= $request->input('email');
        $DOB = $request->input('date_of_birth');
        $Password = $request->input(('password'));
        $phone_number = $request->input('phone_no');
        $user_role_code = $request->input(('user_role_code'));
        $permission_code =$request->input('permission_code');
        $address=$request->input('address');
        $address_2 = $request->input('address');
        $data = array('salesperson_code' => $salesperson, "name" => $name, "gender" => $gender, "city" => $city, "email" => $email, "date_of_birth" => $DOB,"password" =>$Password, 
        "phone_no" => $phone_number,"user_role_code"=> $user_role_code,"permission_code"=>$permission_code ,"address"=>$address, "address" => $address_2);
        User::query('users')->insert($data);
        return redirect('users')->with('statuse','success!!');
    }   
    //edit and upate

    public function edit($id)
    {
        $users = user::find($id);
        return view('users.update_user',compact('users'));
    }
    public function update_user(Request $request,$id)
    {
        $users = User::find($id);       
        $users ->email= $request->input('email');
        $users ->name = $request->input('name');
        $users ->gender = $request->input('gender');
        $users ->salesperson_code = $request->input('salesperson_code');
        $users ->date_of_birth = $request->input('date_of_birth');
        $users ->password = $request->input(('password'));
        $users ->phone_no = $request->input('phone_no');
        $users ->user_role_code = $request->input('user_role_code');
        $users ->status = $request->input(('status'));
        $users ->inactived = $request->input(('inactived'));
        $users->save();
        return redirect('users')->with('status',"Data Update Success!!");
    }
}
