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
                    <form method="POST" action="">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Trip Ticket</span>
                                    </div>
                                    <br>
                                    <div class="card-header">
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