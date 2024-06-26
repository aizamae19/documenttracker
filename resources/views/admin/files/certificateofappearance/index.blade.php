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
                                                <p>PURPOSE</p>
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