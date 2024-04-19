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
                              <form method="POST" action="{{route('travelorder.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-header">
                                            <span class="fa fa-file"> Travel Order</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p> DATE OF FILING</p>
                                                    <input type="text" class="form-control" name="Date">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p>LOCATION</p>
                                                    <input type="text" class="form-control" name="Location">     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p>INCLUSIVE DATE</p>
                                                    <input type="text" class="form-control" name="InclusiveDates">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <p>PURPOSE</p>
                                                    <textarea class="form-control" name="Purpose"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p>ENDORSER</p>
                                                    <input type="text" class="form-control" name="Endorser">      
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <p>DATED</p>
                                                    <input type="text" class="form-control" name="Dated">            
                                                </div>
                                            </div>
                                           
                                          <div class="col-md-4">
                                                      <div class="form-group">
                                                          <p>Number of Employees</p>
                                                          <input type="number" class="form-control" name="Subject" placeholder="" id="Subject">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12" id="travelorder_form" style="display: none;">
                                                      <div class="form-group">
                                                      </div>
                                                      <div class="row" id="travelorders_form">
                                                      </div>
                                                  </div>

                                                  <script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
                                                  <script>
                                                      $('#Subject').on('input', function(){
                                                          var Subject = Number($('#Subject').val());

                                                          if(Subject >= 1){
                                                              $('#travelorder_form').show();
                                                              $('#travelorders_form').empty();
                                                              for(let x = 0; x < Subject; x++){
                                                                  $('#travelorders_form').append('<div class="col-md-4"><div class="form-group"><p>NAME</p><input class="form-control" name="Name[]" placeholder="Name"></div></div><div class="col-md-4"><div class="form-group"><p>DESIGNATION</p><input class="form-control" name="Designation[]" placeholder="Designation"></div></div><div class="col-md-4"> <div    <p>OFFICE</p><select name="Office" class="form-control" required=""  > <option enabled>Select Office</option> <option>OFFICE OF THE CITY MAYOR</option> <option>OFFICE OF THE CITY BUDGET OFFICER</option><option>OFFICE OF THE CITY ACCOUNTANT</option><option>OFFICE OF THE CITY GENERAL SERVICES OFFICER</option> <option>OFFICE OF THE CITY AGRICULTURIST</option><option>DILG CITY OFFICE</option> <option>OFFICE OF THE CITY ADMINISTRATOR</option>    <option>OFFICE OF THE CITY LEGAL OFFICER</option> <option>OFFICE OF THE CITY TREASURER</option>  <option>OFFICE OF THE CITY ASSESSOR</option><option>OFFICE OF THE CITY ENGINEER</option><option>OFFICE OF THE CITY HEALTH OFFICER</option><option>OFFICE OF THE CITY VETERINARIAN</option><option>OFFICE OF THE CITY CIVIL REGISTRAR</option> <option>LOCAL ECONOMIC ENTERPRISE - MARKET OPERATION</option> <option>LOCAL ECONOMIC ENTERPRISE - TERMINAL OPERATION</option> <option>LOCAL ECONOMIC ENTERPRISE - SLAUGHTERHOUSE OPERATION</option>  <option>OFFICE OF THE CITY DISASTER RISK REDUCTION AND MANAGEMENT OFFICER</option>  <option>CITY INVESTMENT PROMOTIONS AND TOURISM OFFICE</option>  <option>OFFICE OF THE VICE MAYOR AND THE SANGGUNIANG PANLUNGSOD</option>   <option>OFFICE OF THE SECRETARY TO THE SANGGUNIANG PANLUNGSOD</option>   <option>OFFICE OF THE CITY HUMAN RESOURCE MANAGEMENT AND DEVELOPMENT OFFICER</option> <option>OFFICE OF THE CITY PLANNING AND DEVELOPMENT COORDINATOR</option> <option>OFFICE OF THE CITY ENVIRONMENT AND NATURAL RESOURCES MANAGEMENT OFFICER</option> <option>OFFICE OF THE CITY SOCIAL WELFARE AND DEVELOPMENT OFFICER</option></select>     </div>   </div>');
                                       
                                                    
                                                              }
                                                          } else {
                                                              $('#travelorder_form').hide();
                                                          }
                                                          console.log(Subject);
                                                      });
                                                  </script>
                                                  <div class="col-md-12">
                                                      <a href="{{route('filedashboard')}}" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </section>
        @endsection