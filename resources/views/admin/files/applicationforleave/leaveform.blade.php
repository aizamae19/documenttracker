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
                    <form method="POST" action="{{route('applicationforleave.store')}}">
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
                                                    <select name="Office" class="form-control" required=""  >
                                                         <option enabled>Select Office</option>
                                                          <option>MAYOR'S</option>
                                                          <option>BUDGET</option>
                                                          <option>ACCOUNTING</option>
                                                          <option>OGS</option>   
                                                          <option>AGRICULTURE</option>
                                                          <option>DILG </option>
                                                          <option>ADMIN</option>
                                                          <option>LEGAL</option>
                                                          <option>TREASURER</option>
                                                          <option> ASSESSOR</option>
                                                          <option> ENGINEERING<option>CHU</option>
                                                          <option> VET</option>
                                                          <option> REGISTRAR</option>
                                                          <option>MARKET</option>
                                                          <option>TERMINAL</option>
                                                          <option> SLAUGHTERHOUSE </option>
                                                          <option>CDRRMO</option>
                                                          <option>TOURISM</option>
                                                          <option>VICE SP</option>
                                                          <option>SECRETARY SP</option>
                                                          <option>HRMO</option>
                                                          <option>PLANNING</option>
                                                          <option>CENRO</option>
                                                          <option>CSWD</option>
                                                    </select>
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
                                                <input type="date" class="form-control" name="DateOfFiling">
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
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Vacation Leave"/>
                                                    Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Mandatory/Forced Leave" />
                                                    Mandatory/Forced Leave(Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Sick Leave" />
                                                    Sick Leave  (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Maternity Leave" />
                                                    Maternity Leave (R.A. No. 11210 / IRR issued by CSC, DOLE and SSS)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Paternity Leave" />
                                                    Paternity Leave (R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Special Privilege Leave" />
                                                    Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Solo Parent Leave" />
                                                    Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Study Leave" />
                                                    Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="10-Day VAWC Leave" />
                                                    10-Day VAWC Leave (RA No. 9262 / CSC MC No. 15, s. 2005)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Rehabilitation Privilege" />
                                                    Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Special Leave Benefits for Women" />
                                                    Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" name="TypeOfLeave[]" value="Special Emergency (Calamity) Leave" />
                                                    Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="TypeOfLeave[]" value="Adoption Leave" />
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
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Within the Philippines" />
                                                    Within the Philippines
                                                    <input type="text" name="WithinThePhilippines" style="width: 45%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Abroad" />
                                                    Abroad (Specify)
                                                    <input type="text" name="Abroad" style="width: 55%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>In case of Sick Leave:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="In Hospital" />
                                                    In Hospital (Specify Illness)
                                                    <input type="text" name="InHospital" style="width: 33%; padding: 5px 5px; box-sizing: border-box; border: none; border-bottom: 1px solid #000;">
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Out Patient" />
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
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Completion of Master's Degree" />
                                                    Completion of Master's Degree
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="BAR/Board Examination Review" />
                                                    BAR/Board Examination Review
                                                </div>
                                                <div class="line">
                                                    <p style="font-size: 15px;"><i>Other purpose:</i></p>
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Monetization of Leave Credits" />
                                                    Monetization of Leave Credits
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="DetailsOfLeave[]" value="Terminal Leave" />
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
                                                    <input type="checkbox" class="my-checkbox" name="Commutation[]" value="Not Requested" />
                                                    Not Requested
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Commutation[]" value="Requested" />
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
                                                    <input type="checkbox" class="my-checkbox" name="Recommendation[]" value="For Approval" />
                                                    For Approval
                                                </div>  
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" name="Recommendation[]" value="For disapproval due to" />
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