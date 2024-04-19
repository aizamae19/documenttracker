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
use App\Models\Office;
use Carbon\Carbon;

class FileController extends Controller
{
    public function file()
    {
    $dispatches = Dispatch::all(); 
    $office = Office::all();
    $locators = Locator::all(); 
    $certificateofappearances = Certificateofappearance::all(); 
    $applicationforleaves = Applicationforleave::all(); 
    $travelorders = Travelorder::all();
    return view('admin.files.index', compact('travelorders','dispatches','locators', 'certificateofappearances', 'applicationforleaves', 'office' ));
    }

    public function storefile(Request $request)
    {
        $filesave = new File();
        $filesave->SeriesNumber = $request->SeriesNumber;

        if ($filesave->save()) {
            return redirect()->back()->withErrors('Successfully Saved!');
        }
    }

    public function viewfile($id) {
        $travelorder = Travelorder::find($id);
    }

    public function dispatchfile()
    {
        return view('admin.files.dispatch.index');
    }

    public function viewdispatch(Request $request){
        $dispatches=Dispatch::where('id',$request->id)->first();

        return view('admin.files.dispatch.view',[
                'dispatches'=>$dispatches
        ]);
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
        $Dispatchsave->Office = $request->Office;
        $Dispatchsave->DescriptionofDispatch = $request->DescriptionofDispatch;
        $Dispatchsave->PlateNumber = $request->PlateNumber;
        $Dispatchsave->Driver = $request->Driver;
        $Dispatchsave->Passenger = json_encode($request->Passenger);


        if ($Dispatchsave->save()) {
            return redirect("/admin/files")->withErrors('Successfully Saved!');
        }
    }

    public function applicationforleave(){
        $applicationforleaves = Applicationforleave::get();
        return view('admin.files.applicationforleave.leaveform', [
            'applicationforleaves'=>$applicationforleaves 
        ]);
    }

    public function viewapplicationforleave(Request $request){
        $applicationforleaves=Applicationforleave::where('id',$request->id)->first();

        return view('admin.files.applicationforleave.view',[
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
            return redirect("/admin/files")->with('Success', 'Application for leave saved successfully.');
        } else {
            return redirect()->back()->with('Error', 'Failed to save application for leave.');
        }
    }

    public function travelorder()
    {
        return view('admin.files.travelorder.travelorder');
    }

    public function viewtravelorder(Request $request){
        $travelorders=Travelorder::where('id',$request->id)->first();

        return view('admin.files.travelorder.print',[
                'travelorders'=>$travelorders
        ]);
    }
    
        public function storetravelorder (Request $request)
            {
            $Travelorder = new Travelorder();
            $Travelorder->Date = $request->Date;
            $Travelorder->Location = $request->Location;
            $Travelorder->Date = $request->Date;
            $Travelorder->InclusiveDates = $request->InclusiveDates;
            $Travelorder->Endorser = $request->Endorser;
            $Travelorder->Dated = $request->Dated;
            $Travelorder->Purpose = $request->Purpose;
            $Travelorder->Subject = $request->Subject;
            $Travelorder->Name = json_encode($request->Name);
            $Travelorder->Designation = json_encode($request->Designation);
            $Travelorder->Office = json_encode($request->Office);

        if ($Travelorder->save()) {
            return redirect("/admin/files")->withErrors('Successfully Saved!');
        }
    }

    public function certificateofappearance()
    {
        return view('admin.files.certificateofappearance.index');
    }

    public function viewcertificateofappearance(Request $request){
        $certificateofappearances=Certificateofappearance::where('id',$request->id)->first();

        return view('admin.files.certificateofappearance.view',[
                'certificateofappearances'=>$certificateofappearances
        ]);
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
        $certificateofappearancesave->Office = $request->Office;

        if ($certificateofappearancesave->save()) {
            return redirect("/admin/files")->withErrors('Successfully Saved!');
        }
    }

    public function deletecertificateofappearance(Request $request){
        $Deletesave=Certificateofappearance::where('id' ,$request->id)->first();
        $Deletesave->Name = $request->Name;
        $Deletesave->Designation = $request->Designation;
        $Deletesave->Service = $request->Service;
        $Deletesave->InclusiveDate = $request->InclusiveDate;
        $Deletesave->Location = $request->Location;
        $Deletesave->Day = $request->Day;
        $Deletesave->Date = $request->Date;
        $Deletesave->Place = $request->Place;
        $Deletesave->Office = $request->Office;
        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
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
            return redirect("/admin/files")->withErrors('Successfully Saved!');
        }
    }
}
