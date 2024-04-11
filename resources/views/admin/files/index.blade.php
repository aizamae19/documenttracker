@extends('layouts.default')

@section('content')
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="{{asset('assets/img/file.png')}}" width="40"> List of Files</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Files</li>
                     </ol>
                  </div><br>
                  <a class="btn btn-sm btn-info elevation-4" href="#" data-toggle="modal" data-target="#add" style="margin-left: 7px;"><i
                        class="fa fa-plus-square"></i>
                     Add New</a>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <br>
                  <div class="col-md-12">
                     <table id="example1" class="table table-hover">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>File Type</th>
                              <th>Date</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($files))
                           @foreach($files as $file)
                           <tr>
                              <td>{{$file->SeriesNumber}}</td>
                              <td>{{$file->FileType}}</td>
                              <td>{{$file->created_at}}</td>                           
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#view"><i
                                       class="fa fa-eye"></i> View</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> Delete</a>
                              </td>
                           </tr>
                           @endforeach
                        @endif  
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="{{asset('assets/img/sent.png')}}" alt="" width="50" height="46">
               <h3>Are you sure want to delete this file?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="{{asset('assets/img/file.png')}}" width="30"> Document Information</h5>
                           </div>
                           <br>
                           <div class="slide-v">
                              <div class="slide">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="{{ route('applicationforleave') }}" class="form-control">APPLICATION FOR LEAVE</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="{{ route('certificateofappearance')}}" class="form-control">CERTIFICATE OF APPEARANCE</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="{{ route('tripticket')}}" class="form-control">TRIP TICKET</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="" class="form-control">DISPATCH</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="{{ route('locator')}}" class="form-control">LOCATOR</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
                                             <a href="{{ route('travelorder')}}" class="form-control">TRAVEL ORDER</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
@endsection