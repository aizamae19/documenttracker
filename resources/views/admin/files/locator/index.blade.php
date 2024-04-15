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
                                                <input type="text" class="form-control" name="Office">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="content">
                                        <div class="container">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col"style="text-align:center; font-size: 12px;">DATE</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">ETD<br>Expected Time of Departure</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">ETR<br>Expected Time of Return</th>
                                                    <th scope="col"style="text-align:center; font-size: 12px;">TIME DEVIATION for ETR</th>
                                                    <th scope="col"style="text-align:center; font-size: 12px;">OFFICIAL or PERSONAL?</th>
                                                    <th scope="col"style="text-align:center; font-size: 12px;">PURPOSE/REASON</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">APPROVAL/<br>DISAPPROVAL By HoO</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">Request for Transpo<br>If Yes, to be signed by Motorpool & Driver</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">Office/Establishment<br>Visited<br>Date & Time Visited</th>
                                                    <th scope="col" style="text-align:center; font-size: 12px;">Confirmation of Appearance<br>Name & Signature of Attending Employee</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr scope="row">
                                                        <td><input type="text" class="form-control" name="Date"></td>
                                                        <td><input type="text" class="form-control" name="ExpectedTimeOfDeparture"></td>
                                                        <td><input type="text" class="form-control" name="ExpectedTimeOfReturn"></td> 
                                                        <td><input type="text" class="form-control" name="TimeDeviation"></td>
                                                        <td><input type="text" class="form-control" name="OfficialOrPersonal"></td>
                                                        <td><input type="text" class="form-control" name="Purpose"></td>
                                                        <td><input type="text" class="form-control" name="Approval"></td>
                                                        <td><input type="text" class="form-control" name="RequestForTranspo"></td>
                                                        <td><input type="text" class="form-control" name="OfficeEstablishmentVisited"></td>
                                                        <td><input type="text" class="form-control" name="ConfirmationOfAppearance"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                        <td><input type="text" class="form-control" name=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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