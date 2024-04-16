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
                                                <input type="Date" class="form-control" name="Date">
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
                                                <p>SUBJECT</p>
                                                <input type="text" class="form-control" name="Subject">         
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>OFFICE</p>
                                                <input type="text" class="form-control" name="Office">  
                                            </div>
                                        </div>
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