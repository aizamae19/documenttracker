<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::get();
        return view('admin.users.index', [
            'users'=>$users
        ]);
    }

    public function edituser(Request $request){
        $users = User::where('id', $request->id)->first();
        $users = User::orderBy('updated_at', 'asc')->get();

        return view('admin.users.index',[
            'user'=>$user,
            'users'=>$users
        ]);
    }

    public function updateuser(Request $request){
        $Updatesave=User::where('id' ,$request->id)->first();
        $Updatesave-> name =$request->name;
        $Updatesave-> type =$request->type;
        $Updatesave-> email =$request->email;
        $Updatesave-> password =$request->password;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }
}
