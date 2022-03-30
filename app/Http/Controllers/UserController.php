<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserAddresses;
use App\Models\UserPhones;

class UserController extends Controller
{

    public function index(){
        $users= User::all();
        return view('admin/users/userindex',
            [   'users' => $users,
            ]);
    }

    public function createUser()
    {
        return view('admin/users/createuser');
    }

    public function storeUser(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required', 
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();

        user::create($input);

        return redirect()->route('admin');

    }
    

    public function showUser($id){
        $user= User::find($id);
        $useraddress= UserAddresses::find($id);
        $userphone= Userphones::find($id);
        return view('admin/users/user', 
            [   'user' => $user, 
                'useraddress' => $useraddress,
                'userphone' => $userphone,
            ]);
    }

    public function editUser($id){
        $user = User::find($id);
        $useraddress = UserAddresses::find($id);
        $userphone = UserPhones::find($id);
        return view('admin/users/edituser', 
            [   'user' => $user, 
                'useraddress' => $useraddress,
                'userphone' => $userphone,
            ]);
    }

    public function updateUser(Request $request ,$id){
        $user = User::find($id);
        $user->update($request->all());
        
        return redirect()->route('admin');
   }

    public function destroyUser($id)
    {
        //
    }
}
