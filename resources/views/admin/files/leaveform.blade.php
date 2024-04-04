@extends('layouts.default')

@section('content')
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">File</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <form method="POST" action="{{route('leaveform.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Application for Leave</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>1. OFFICE/DEPARTMENT</p>
                                                <input type="text" class="form-control" name="Office">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>2. NAME (Last) (First) (Middle)</p>
                                                <input type="text" class="form-control" name="Name">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>3. DATE OF FILING</p>
                                                <input type="text" class="form-control" name="DateOfFiling">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>4. POSITION</p>
                                                <input type="text" class="form-control" name="Position">                 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>5. SALARY</p>
                                                <input type="text" class="form-control" name="Salary">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                                <label style="text-align: center;">6. DETAILS OF APPLICATION</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>6.A TYPE OF LEAVE TO BE AVAILED OF</p>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="1"/>
                                                    Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="2" />
                                                    Mandatory/Forced Leave(Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="3" />
                                                    Sick Leave  (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="4" />
                                                    Maternity Leave (R.A. No. 11210 / IRR issued by CSC, DOLE and SSS)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="5" />
                                                    Paternity Leave (R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="6" />
                                                    Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="7" />
                                                    Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="8" />
                                                    Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="9" />
                                                    10-Day VAWC Leave (RA No. 9262 / CSC MC No. 15, s. 2005)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="10" />
                                                    Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="11" />
                                                    Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="12" />
                                                    Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="13" />
                                                    Adoption Leave (R.A. No. 8552)
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>Others:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="text" name="Others" style="width: 100%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="line">
                                                    <p>6.A DETAILS OF LEAVE</p>
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>In case of Vacation/Special Privilege Leave:</i></p>
                                                </div>   
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="1" />
                                                    Within the Philippines
                                                    <input type="text" name="WithinThePhilippines" style="width: 45%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="2" />
                                                    Abroad (Specify)
                                                    <input type="text" name="Abroad" style="width: 55%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>In case of Sick Leave:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="3" />
                                                    In Hospital (Specify Illness)
                                                    <input type="text" name="InHospital" style="width: 33%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="4" />
                                                    Out Patient (Specify Illness)
                                                    <input type="text" name="OutPatient" style="width: 31%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>In case of Special Leave Benefits for Women:</i></p>
                                                </div>  
                                                <div class="line">
                                                    (Specify Illness)
                                                    <input type="text" name="SpecialLeaveBenefitsForWomen" style="width: 62%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>In case of Study Leave:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="5" />
                                                    Completion of Master's Degree
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="6" />
                                                    BAR/Board Examination Review
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>Other purpose:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="7" />
                                                    Monetization of Leave Credits
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="8" />
                                                    Terminal Leave 
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>6.C NUMBER OF WORKING DAYS APPLIED FOR</p>
                                                <div class="line">
                                                    <input type="text" name="NumberOfWorkingDaysAppliedFor
" style="width: 100%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                                <div class="line">
                                                    INCLUSIVE DATES
                                                </div>
                                                <div class="line">
                                                    <input type="text" name="InclusiveDates" style="width: 100%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>6.D COMMUTATION </p>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Commutation[]" value="1" />
                                                    Not Requested
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Commutation[]" value="2" />
                                                    Requested
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                                <label style="text-align: center;">7. DETAILS OF ACTION ON APPLICATION</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>7.A CERTIFICATION OF LEAVE CREDITS</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>7.B RECOMMENDATION</p>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Recommendation[]" value="1" />
                                                    For Approval
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Recommendation[]" value="2" />
                                                    For disapproval due to
                                                    <input type="text" name="ForDisapprovalDueTo" style="width: 45%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>7.C APPROVED FOR:</p>
                                            </div>
                                            <div class="line">
                                                <input type="text" name="DaysWithPay" style="width: 7%; padding: 2px 3px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                days with pay
                                            </div>
                                            <div class="line">
                                                <input type="text" name="DaysWithoutPay" style="width: 7%; padding: 2px 3px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                days without pay
                                            </div>
                                            <div class="line">
                                                <input type="text" name="OthersSpecify" style="width: 7%; padding: 2px 3px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                others (Specify)
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>7.D DISAPPROVED DUE TO:</p>
                                                <input type="text" name="DisapprovedDueTo" style="width: 100%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <a href="{{route('filedashboard')}}" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
@endsection