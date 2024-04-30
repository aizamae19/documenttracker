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
                    <form method="POST" action="{{route('locator.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Locator</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>YEAR</p>
                                                <input type="text" class="form-control" name="Year">          
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>MONTH OF</p>
                                                <input type="text" class="form-control" name="MonthOf">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>NAME OF EMPLOYEE</p>
                                                <input type="text" class="form-control" name="NameOfEmployee">        
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
                                                <p>OFFICE</p>
                                                <select name="Office" class="form-control" required=""  >
                                                         <option enabled>Select Office</option>
                                                          <option>MAYOR'S</option>
                                                          <option>CDRRMO</option>
                                                          <option>TOURISM</option>
                                                          <option>VICE SP</option>
                                                          <option>SECRETARY SP</option>
                                                          <option>ADMIN</option>
                                                          <option>HR</option>
                                                          <option>PLANNING</option>
                                                          <option>BUDGET</option>
                                                          <option>ACCOUNTING</option>
                                                          <option>OGS</option>  
                                                          <option>CENRO</option>
                                                          <option>LEGAL</option>
                                                          <option>TREASURER</option>
                                                          <option>ASSESSOR</option>
                                                          <option>ENGINEERING</option>
                                                          <option>CHU</option>
                                                          <option>CSWD</option>
                                                          <option>VET</option>
                                                          <option>REGISTRAR</option>
                                                          <option>DILG</option>
                                                          <option>MARKET</option>
                                                          <option>TERMINAL</option>
                                                          <option>SLAUGHTER</option>
                                                          <option>AGRICULTURE</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Date</p>
                                                <input type="text" class="form-control" name="Date">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Expected Time of Departure</p>
                                                <input type="text" class="form-control" name="ExpectedTimeOfDeparture">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Expected Time of Return(ETR)</p>
                                                <input type="text" class="form-control" name="ExpectedTimeOfReturn">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>TIME DEVIATION for ETR</p>
                                                <input type="text" class="form-control" name="TimeDeviation">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>OFFICIAL or PERSONAL?</p>
                                                <input type="text" class="form-control" name="OfficialOrPersonal">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>PURPOSE/REASON</p>
                                                <input type="text" class="form-control" name="Purpose">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>APPROVAL/DISAPPROVAL By HoO</p>
                                                <input type="text" class="form-control" name="Approval">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Request for Transpo<br>If Yes, to be signed by Motorpool & Driver</p>
                                                <input type="text" class="form-control" name="RequestForTranspo">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Office/Establishment<br>Visited<br>Date & Time Visited</p>
                                                <input type="text" class="form-control" name="OfficeEstablishmentVisited">        
                                            </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Confirmation of Appearance<br>Name & Signature of Attending Employee</p>
                                                <input type="text" class="form-control" name="ConfirmationOfAppearance">        
                                            </div>
                                        </div>
                                    </table>
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

        <style>
            .html-table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .tr-td, .tableh {
                border: 1px solid #000;
                text-align: left;
                padding: 1px;
            }
        </style>
@endsection