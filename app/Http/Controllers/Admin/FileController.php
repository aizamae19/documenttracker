<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dispatch; 
use App\Models\Applicationforleave;
use App\Models\Travelorder;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function file()
    {
        return view('admin.files.index');
        if (Auth::check()) {
            $user = Auth::user();
        }
    }

    public function saveDispatch(Request $request)
    {
            $Dispatchsave = new Dispatch();
            $Dispatchsave->DispatchNumber = $request->DispatchNumber;
            $Dispatchsave->TripTicketNumber = $request->TripTicketNumber;
            $Dispatchsave->Date = $request->Date;
            $Dispatchsave->Name = $request->Name;
            $Dispatchsave->Address = $request->Address;
            $Dispatchsave->ContactNumber = $request->ContactNumber;
            $Dispatchsave->OfficeName = $request->OfficeName;
            $Dispatchsave->DescriptionofDispatch = $request->DescriptionofDispatch;
            $Dispatchsave->PlateNumber = $request->PlateNumber;
            // $Dispatchsave->CondutionSticker = $request->CondutionSticker;
            $Dispatchsave->Driver = $request->Driver;
            $Dispatchsave->Passenger = $request->Passenger;

        if ($Dispatchsave->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
        $applicationforleaves = Applicationforleave::get();
        return view('admin.files.leaveform', [
            'applicationforleaves'=>$applicationforleaves
        ]);
    }

    public function storeleaveform(Request $request){
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
        
        if($applicationforleavesave->save()) {
            return redirect()->back();
        }
    }

    public function travelorder()
    {
        return view('admin.files.travelorder');
    }
          public function leaveform()
        {
            return view('admin.files.leaveform');
        }

         public function dispatchfile()
        {
            return view('admin.files.dispatch');
        }
}


