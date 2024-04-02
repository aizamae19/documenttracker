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

    // public function deleteusers(Request $request){
    //     $Deletesave=Users::where('id' ,$request->id)->first();
    //     $Deletesave-> name =$request->name;
    //     $Deletesave-> type =$request->type;
    //     $Deletesave-> username =$request->username;
    //     $Deletesave-> email =$request->email;
    //     $Deletesave-> password =$request->password;
    //     if($Deletesave->delete()) {
    //         return redirect()->back()->withErrors('Deleted!');
    //     }
    // }
}
