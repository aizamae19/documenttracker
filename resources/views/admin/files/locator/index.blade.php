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
                                       
                                     <div class="col-md-12">
                                              <div class="form-group">
<<<<<<< HEAD
                                                  <p>Number of Employees</p>
=======
                                                  <p>NUMBER OF ROWS</p>
>>>>>>> origin/main
                                                    <input type="number" class="form-control" name="Subject" placeholder="" id="Subject">
                                                </div>
                                              </div>
                                           <div class="col-md-12" id="travelorder_form" style="display: none;">
                                              <div class="form-group">
                                                  </div>
                                                    <div class="row" id="travelorders_form">
                                                  </div>
                                              </div>
                                           <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
                                                <script>
                                                      $('#Subject').on('input', function(){
                                                          var Subject = Number($('#Subject').val());

                                                          if(Subject >= 1){
                                                              $('#travelorder_form').show();
                                                              $('#travelorders_form').empty();
                                                              for(let x = 0; x < Subject; x++){
<<<<<<< HEAD
                                                                  $('#travelorders_form').append('<div class="col-md-6"><div class="form-group"><p>Date</p><input class="form-control" name="Date[]" placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Expected Time of Departure</p><input class="form-control" name="ExpectedTimeOfDeparture[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Expected Time of Return(ETR)</p><input class="form-control" name="ExpectedTimeOfReturn[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>TIME DEVIATION for ETR</p><input class="form-control" name="TimeDeviation[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>OFFICIAL or PERSONAL?</p><input class="form-control" name="OfficialOrPersonal[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>PURPOSE/REASON</p><input class="form-control" name="Purpose[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>APPROVAL/DISAPPROVAL By HoO/REASON</p><input class="form-control" name="Approval[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p style="" >Request for Transpo If Yes, to be signed by Motorpool & Driver</p><input class="form-control" name="RequestForTranspo[] "placeholder=""></div></div><div class="form-group">Office/Establishment Visited Date & Time Visitedr</p><input class="form-control" name="OfficeEstablishmentVisited[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Confirmation of Appearance Name & Signature of Attending Employee</p><input class="form-control" name="ConfirmationOfAppearance[] "placeholder=""></div></div></div>');
=======
                                                                  $('#travelorders_form').append('<div class="col-md-6"><div class="form-group"><p>Date</p><input type="date" class="form-control" name="Date[]" placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Expected Time of Departure</p><input class="form-control" name="ExpectedTimeOfDeparture[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Expected Time of Return(ETR)</p><input class="form-control" name="ExpectedTimeOfReturn[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>TIME DEVIATION for ETR</p><input class="form-control" name="TimeDeviation[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>OFFICIAL or PERSONAL?</p><input class="form-control" name="OfficialOrPersonal[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>PURPOSE/REASON</p><input class="form-control" name="Purpose[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>APPROVAL/DISAPPROVAL By HoO/REASON</p><input class="form-control" name="Approval[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p style="" >Request for Transpo If Yes, to be signed by Motorpool & Driver</p><input class="form-control" name="RequestForTranspo[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group">Office/Establishment Visited Date & Time Visitedr</p><input class="form-control" name="OfficeEstablishmentVisited[] "placeholder=""></div></div><div class="col-md-6"><div class="form-group"><p>Confirmation of Appearance Name & Signature of Attending Employee</p><input class="form-control" name="ConfirmationOfAppearance[] "placeholder=""></div></div></div>');
>>>>>>> origin/main
                                                                    }
                                                                } else {
                                                                    $('#locator_form').hide();
                                                              }
                                                              console.log(Subject);
                                                          });
<<<<<<< HEAD
                                          </script>                                       
                                    
=======
                                          </script>                                      
                                   
>>>>>>> origin/main
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