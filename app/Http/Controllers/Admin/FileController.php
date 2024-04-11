<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicationforleave;
use App\Models\Travelorder;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function file()
    {
        $files = File::get();
        return view('admin.files.index', [
            'files'=>$files
        ]);
    }

    public function storefile(Request $request)
    {
        $filesave = new File();
        $filesave->SeriesNumber = $request->SeriesNumber;
        $filesave->FileType = $request->FileType;

        if($filesave->save()) {
            return redirect()->back();
        }
    }

    public function applicationforleave()
    {
        $applicationforleaves = Applicationforleave::get();
        return view('admin.files.leaveform', [
            'applicationforleaves'=>$applicationforleaves
        ]);
    }

    // public function viewapplicationforleave(Request $request){
    //     $applicationforleaves=Applicationforleave::where('id',$request->id)->first();

    //     return view('admin.files.applicationforleave',[
    //             'applicationforleaves'=>$applicationforleaves
    //     ]);
    // }

    public function storeapplicationforleave(Request $request){
        $applicationforleavesave = new Applicationforleave();
        $applicationforleavesave->Office = $request->Office;
        $applicationforleavesave->Name = $request->Name;
        $applicationforleavesave->DateOfFiling = $request->DateOfFiling;
        $applicationforleavesave->Position = $request->Position;
        $applicationforleavesave->Salary = $request->Salary;
        $applicationforleavesave->TypeOfLeave = $request->TypeOfLeave;
        $applicationforleavesave->Others = $request->Others;
        $applicationforleavesave->DetailsOfLeave = $request->DetailsOfLeave;
        $applicationforleavesave->WithinThePhilippines = $request->WithinThePhilippines;
        $applicationforleavesave->Abroad = $request->Abroad;
        $applicationforleavesave->InHospital = $request->InHospital;
        $applicationforleavesave->OutPatient = $request->OutPatient;
        $applicationforleavesave->SpecialLeaveBenefitsForWomen = $request->SpecialLeaveBenefitsForWomen;
        $applicationforleavesave->NumberOfWorkingDaysAppliedFor = $request->NumberOfWorkingDaysAppliedFor;
        $applicationforleavesave->InclusiveDates = $request->InclusiveDates;
        $applicationforleavesave->Commutation = $request->Commutation;
        $applicationforleavesave->Recommendation = $request->Recommendation;
        $applicationforleavesave->ForDisapprovalDueTo = $request->ForDisapprovalDueTo;
        $applicationforleavesave->DaysWithPay = $request->DaysWithPay;
        $applicationforleavesave->DaysWithoutPay = $request->DaysWithoutPay;
        $applicationforleavesave->OthersSpecify = $request->OthersSpecify;
        $applicationforleavesave->DisapprovedDueTo = $request->DisapprovedDueTo;
        
        $fields = ['TypeOfLeave', 'DetailsOfLeave', 'Commutation', 'Recommendation'];

        foreach ($fields as $field) {
            if ($request->has($field)) {
        
                $values = implode(',', $request->input($field));
                $applicationforleavesave->$field = $values;
            }
        }

        if ($applicationforleavesave->save()) {
            return redirect()->back()->with('Success', 'Application for leave saved successfully.');
        } else {
            return redirect()->back()->with('Error', 'Failed to save application for leave.');
        }
    }

    public function travelorder()
    {
        return view('admin.files.travelorder');
    }

    public function certificateofappearance()
    {
        return view('admin.files.certificateofappearance');
    }

    public function tripticket()
    {
        return view('admin.files.tripticket');
    }

    public function locator()
    {
        return view('admin.files.locator');
    }
}
