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
                                                <input type="text" class="form-control" name="OfficeName">           
                                            </div>
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
                                                <p>PASSENGER</p>
                                                <input type="text" class="form-control" name="Passenger">                 
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