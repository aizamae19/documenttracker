<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dispatch; 
use App\Models\Applicationforleave;
use App\Models\Travelorder;
use App\Models\Certificateofappearance;
use App\Models\Locator;
use App\Models\File;
use Carbon\Carbon;

class FileController extends Controller
{
    public function file()
    {
        $files = File::get();
        return view('admin.files.index', [
            'files'=>$files 
        ]);

        $current_date_time = Carbon::now()->toDateTimeString();
    }

    public function storefile(Request $request)
    {
        
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
        $Dispatchsave->Driver = $request->Driver;
        $Dispatchsave->Passenger = $request->Passenger;

        if ($Dispatchsave->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
    }

    public function applicationforleave(){
        $applicationforleaves = Applicationforleave::get();
        return view('admin.files.leaveform', [
            'applicationforleaves'=>$applicationforleaves 
        ]);
    }

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
public function  storetravelorder (Request $request)
    {
            $Travelorder = new Travelorder();
            $Travelorder->Date = $request->Date;
            $Travelorder->Location = $request->Location;
            $Travelorder->Date = $request->Date;
            $Travelorder->Name = $request->Name;
            $Travelorder->InclusiveDates = $request->InclusiveDates;
            $Travelorder->Designation = $request->Designation;
            $Travelorder->Office = $request->Office;
            $Travelorder->Endorser = $request->Endorser;
            $Travelorder->Dated = $request->Dated;
            $Travelorder->Purpose = $request->Purpose;
            $Travelorder->Subject = $request->Subject;


        if ($Travelorder->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
    }

    public function travelorder()
    {
        return view('admin.files.travelorder');
    }

    public function certificateofappearance()
    {
        return view('admin.files.certificateofappearance.index');
    }

    public function storecertificateofappearance(Request $request)
    {
        $certificateofappearancesave = new Certificateofappearance();
        $certificateofappearancesave->Name = $request->Name;
        $certificateofappearancesave->Designation = $request->Designation;
        $certificateofappearancesave->Service = $request->Service;
        $certificateofappearancesave->InclusiveDate = $request->InclusiveDate;
        $certificateofappearancesave->Location = $request->Location;
        $certificateofappearancesave->Day = $request->Day;
        $certificateofappearancesave->Date = $request->Date;
        $certificateofappearancesave->Place = $request->Place;

        if ($certificateofappearancesave->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
    }

    public function tripticket()
    {
        return view('admin.files.tripticket');
    }

    public function locator()
    {
        return view('admin.files.locator.index');
    }

    public function storelocator(Request $request)
    {
        $locatorsave = new Locator();
        $locatorsave->Year = $request->Year;
        $locatorsave->MonthOf = $request->MonthOf;
        $locatorsave->NameOfEmployee = $request->NameOfEmployee;
        $locatorsave->Designation = $request->Designation;
        $locatorsave->Office = $request->Office;
        $locatorsave->Date = $request->Date;
        $locatorsave->ExpectedTimeOfDeparture = $request->ExpectedTimeOfDeparture;
        $locatorsave->ExpectedTimeOfReturn = $request->ExpectedTimeOfReturn;
        $locatorsave->TimeDeviation = $request->TimeDeviation;
        $locatorsave->OfficialOrPersonal = $request->OfficialOrPersonal;
        $locatorsave->Purpose = $request->Purpose;
        $locatorsave->Approval = $request->Approval;
        $locatorsave->RequestForTranspo = $request->RequestForTranspo;
        $locatorsave->OfficeEstablishmentVisited = $request->OfficeEstablishmentVisited;
        $locatorsave->ConfirmationOfAppearance = $request->ConfirmationOfAppearance;

        if ($locatorsave->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
    }

    public function dispatchfile()
    {
        return view('admin.files.dispatch.index');
    }

    public function deletefile(Request $request){
        $Deletesave=File::where('id' ,$request->id)->first();
        $Deletesave-> SeriesNumber =$request->SeriesNumber;
        $Deletesave-> FileType =$request->FileType;
        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }
}
