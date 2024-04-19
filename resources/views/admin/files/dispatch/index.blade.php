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
                    <form method="POST" action="{{ route('DispatchSave') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Dispatch</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DISPATCH NUMBER</p>
                                                <input type="text" class="form-control" name="DispatchNumber">           
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>TRIP TICKET NUMBER</p>
                                                <input type="text" class="form-control" name="TripTicketNumber">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DATE</p>
                                                <input type="text" class="form-control" name="Date">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>NAME</p>
                                                <input type="text" class="form-control" name="Name">           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>ADDRESS</p>
                                                <input type="text" class="form-control" name="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">    
                                    	<div class="col-md-6">
                                            <div class="form-group">
                                                <p>CONTACT NUMBER</p>
                                                <input type="text" class="form-control" name="ContactNumber">       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>OFFICE NAME</p>
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
                                                    </select>                                            </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>DESCRIPTION OF DISPATCH</p>
                                                        <textarea class="form-control" name="DescriptionofDispatch"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p>PLATE NUMBER</p>
                                                        <input type="text" class="form-control" name="PlateNumber">           
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p>DRIVER</p>
                                                        <input type="text" class="form-control" name="Driver">
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                      <div class="form-group">
                                                          <p>Number of Passenger</p>
                                                          <input type="number" class="form-control" name="" placeholder="" id="Passenger">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12" id="passenger_form" style="display: none;">
                                                      <div class="form-group">
                                                      </div>
                                                      <div class="row" id="passengers_form">
                                                      </div>
                                                  </div>

                                                  <script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
                                                  <script>
                                                      $('#Passenger').on('input', function(){
                                                          var Passenger = Number($('#Passenger').val());

                                                          if(Passenger >= 1){
                                                              $('#passenger_form').show();
                                                              $('#passengers_form').empty();
                                                              for(let x = 0; x < Passenger; x++){
                                                                  $('#passengers_form').append('<div class="col-md-4"><div class="form-group"><p>Name</p><input class="form-control" name="Passenger[]" placeholder=""></div></div>');
                                       
                                                    
                                                              }
                                                          } else {
                                                              $('#passenger_form').hide();
                                                          }
                                                          console.log(Passenger);
                                                      });
                                                  </script>
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