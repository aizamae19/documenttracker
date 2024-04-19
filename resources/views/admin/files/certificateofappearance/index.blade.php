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
                    <form method="POST" action="{{ route('certificateofappearance.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Certificate Of Appearance</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>NAME</p>
                                                <input type="text" class="form-control" name="Name">           
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DESIGNATION</p>
                                                <input type="text" class="form-control" name="Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>SPECIFIED SERVICE RENDERED</p>
                                                <input type="text" class="form-control" name="Service">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>OFFICE</p>
                                                    <select name="Office" class="form-control" required=""  >
                                                         <option enabled>Select Office</option>
                                                          <option>OFFICE OF THE CITY MAYOR</option>
                                                          <option>OFFICE OF THE CITY BUDGET OFFICER</option>
                                                          <option>OFFICE OF THE CITY ACCOUNTANT</option>
                                                          <option>OFFICE OF THE CITY GENERAL SERVICES OFFICER</option>   
                                                          <option>OFFICE OF THE CITY AGRICULTURIST</option>
                                                          <option>DILG CITY OFFICE</option>
                                                          <option>OFFICE OF THE CITY ADMINISTRATOR</option>
                                                          <option>OFFICE OF THE CITY LEGAL OFFICER</option>
                                                          <option>OFFICE OF THE CITY TREASURER</option>
                                                          <option>OFFICE OF THE CITY ASSESSOR</option>
                                                          <option>OFFICE OF THE CITY ENGINEER</option>
                                                          <option>OFFICE OF THE CITY HEALTH OFFICER</option>
                                                          <option>OFFICE OF THE CITY VETERINARIAN</option>
                                                          <option>OFFICE OF THE CITY CIVIL REGISTRAR</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - MARKET OPERATION</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - TERMINAL OPERATION</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - SLAUGHTERHOUSE OPERATION</option>
                                                          <option>OFFICE OF THE CITY DISASTER RISK REDUCTION AND MANAGEMENT OFFICER</option>
                                                          <option>CITY INVESTMENT PROMOTIONS AND TOURISM OFFICE</option>
                                                          <option>OFFICE OF THE VICE MAYOR AND THE SANGGUNIANG PANLUNGSOD</option>
                                                          <option>OFFICE OF THE SECRETARY TO THE SANGGUNIANG PANLUNGSOD</option>
                                                          <option>OFFICE OF THE CITY HUMAN RESOURCE MANAGEMENT AND DEVELOPMENT OFFICER</option>
                                                          <option>OFFICE OF THE CITY PLANNING AND DEVELOPMENT COORDINATOR</option>
                                                          <option>OFFICE OF THE CITY ENVIRONMENT AND NATURAL RESOURCES MANAGEMENT OFFICER</option>
                                                          <option>OFFICE OF THE CITY SOCIAL WELFARE AND DEVELOPMENT OFFICER</option>
                                                    </select>                                    
                                                </div>
                                          </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>INCLUSIVE DATE</p>
                                                <input type="text" class="form-control" name="InclusiveDate">          
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>LOCATION</p>
                                                <input type="text" class="form-control" name="Location">
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
                                                <label style="text-align: center;">DATE ISSUED</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DAY</p>
                                                <input type="text" class="form-control" name="Day">       
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DATE (MONTH, YEAR)</p>
                                                <input type="text" class="form-control" name="Date">           
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>PLACE</p>
                                                <input type="text" class="form-control" name="Place">
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