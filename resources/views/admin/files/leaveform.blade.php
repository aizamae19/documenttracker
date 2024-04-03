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
                  <form>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="card-header">
                                 <span class="fa fa-file"> Application for Leave</span>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Category Name</label>
                                       <input type="text" class="form-control" placeholder="Category Name">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Description</label>
                                      <textarea class="form-control" placeholder="Description"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                <a href="{{route('filedashboard')}}" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                                 <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                  </form>
               </div>
            </div>
      </div>

   </div>
   </div>
   </div>
   </section>
@endsection