<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class DepartmentController extends Controller
{
    public function departmentorganization()
    {
        $departments = Organization::get();
        return view('admin.organization.department.index',[
            'departments'=>$departments
        ]);
    }

    public function storeorganization(Request $request){
        $organizationsave =new Organization();
        $organizationsave->dept_name = $request->dept_name;

        if($organizationsave->save()) {
            return redirect()->back();
        }
    }
    public function editorganization(Request $request){
        $departments = Organization::where('id', $request->id)->first();

        return view('admin.organization.department.index',[
            'departments'=>$departments
        ]);
    }

    public function updateorganization(Request $request){
        $Updatesave=Organization::where('id' ,$request->id)->first();
        $Updatesave->dept_name =$request->dept_name;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deleteorganization(Request $request){
        $Deletesave=Organization::where('id' ,$request->id)->first();
        $Deletesave->dept_name =$request->dept_name;

        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }
}
