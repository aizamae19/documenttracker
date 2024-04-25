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
                                            <span class="fa fa-file">Travel Order</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p> DATE OF FILING</p>
<<<<<<< HEAD
                                                    <input type="date" class="form-control" name="Date">
=======
                                                    <input type="date"  class="form-control" name="Date">
>>>>>>> origin/master
                                                </div>
                                            </div>
                                            <div class="col-md-3">
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
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p>LOCATION</p>
                                                    <input type="text" class="form-control" name="Location">     
                                                </div>
                                            </div>
                                            <div class="col-md-3">
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
                                                                  $('#travelorders_form').append('<div class="col-md-4"><div class="form-group"><p>NAME</p><input class="form-control" name="Name[]" placeholder="Name"></div></div><div class="col-md-4"><div class="form-group"><p>DESIGNATION</p><input class="form-control" name="Designation[] "placeholder="Designation"></div></div><div class="col-md-4"> <div><p>OFFICE</p><select name="Office[]" class="form-control" required=""  ><option>MAYORS</option><option>BUDGET</option><option>ACCOUNTANTING</option><option>OGS</option> <option>AGRICULTURE</option><option>DILG</option><option>ADMIN</option><option>LEGAL</option><option>TREASURER</option> <option>ASSESSOR</option><option> ENGINEERING<option>CHU</option><option>VET</option> <option> REGISTRAR</option><option>MARKET</option><option>TERMINAL</option><option> SLAUGHTER</option> <option>CDRRMO</option><option>TOURISM</option><option>VICE SP</option><option>SECRETARY SP</option><option>HRMO</option><option>PLANNING</option> <option>CENRO</option><option>CSWD</option></select></div></div>');
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