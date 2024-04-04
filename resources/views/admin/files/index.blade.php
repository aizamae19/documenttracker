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
                              <th>File Type</th>
                              <th>File Name</th>
                              <th>Description</th>
                              <th>Added by</th>
                              <th>Date</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                              <td></td>
                              <td class="text-info"></td>
                              <td></td>
                              <td></td>                              
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i> Update</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> Delete</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div id="edit" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="{{asset('assets/img/file.png')}}" width="40"> File Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="float-left">File Name</label>
                                    <input type="text" class="form-control" placeholder="File Name">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="float-left">Category Name</label>
                                    <select class="form-control">
                                       <option>Category-1</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Description</label>
                                    <textarea class="form-control" placeholder="Description"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="float-left">Tags</label>
                                    <input type="text" class="form-control" placeholder="Tags">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label  class="float-left">Files</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-info">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="{{asset('assets/img/sent.png')}}" alt="" width="50" height="46">
               <h3>Are you sure want to delete this File?</h3>
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
               <form>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="{{asset('assets/img/file.png')}}" width="30"> Document Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{ route('leaveform') }}" class="form-control">APPLICATION FOR LEAVE</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{route('leaveform')}}" class="form-control">CERTIFICATE OF APPEARANCE</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{route('leaveform')}}" class="form-control">TRIP TICKET</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{route('leaveform')}}" class="form-control">DISPATCH</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{route('leaveform')}}" class="form-control">LOCATOR</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="card-footer">
                                       <a href="{{route('leaveform')}}" class="form-control">TRAVEL ORDER</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <a href="#" class="steps previous round">&#8249;</a>
                              <a href="#" class="steps next round">&#8250;</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <style type="text/css">
            .steps {
               text-decoration: none;
               display: inline-block;
               padding: 8px 16px;
            }

            .steps:hover {
               background-color: #ddd;
               color: black;
            }

            .previous {
               background-color: #f1f1f1;
               color: black;
            }

            .next {
               background-color: #17a2b8;
               color: white;
            }

            .round {
               border-radius: 50%;
            }
      </style>
@endsection