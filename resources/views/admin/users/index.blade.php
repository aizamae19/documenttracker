@extends('layouts.default')

@section('content')
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="{{ asset('assets/img/users.png')}}" width="40"> Users</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                     <table id="example1" class="table">
                        <thead class="btn-cancel">
                           <tr>
                              <th>Full Name</th>
                              <th>Category</th>
                              <th>Username</th>
                              <th>Account</th>
                              <th>Status</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($users))
                           @foreach($users as $user)
                           <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->type}}</td>
                              <td>{{$user->username}}</td>
                              <td>
                                 <p class="info">Email: {{$user->email}}<b></b></p>
                                 <p class="info">Password: <b></b></p>
                              </td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-user-edit"></i> Update</a>
                                 <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i
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
               <img src="{{ asset('assets/img/sent.png')}}" alt="" width="50" height="46">
               <h3>Are you sure want to delete this User?</h3>
               <div class="m-t-20">
                  <a href="{{ route('usersdashboard') }}" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="edit" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form method="POST" action="{{ route('register.custom') }}">
                  @csrf
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="{{asset('assets/img/users.png')}}" width="40"> User Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Email</label>
                                    <input type="text" class="form-control" placeholder="mail@gmail.com">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Category</label>
                                    <select class="form-control">
                                       <option>Admin</option>
                                       <option>Staff</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Username</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Password</label>
                                    <input type="password" class="form-control" placeholder="**********">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="{{ route('usersdashboard') }}" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-info">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form method="POST" action="{{ route('register.custom') }}">
                  @csrf
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="{{asset('assets/img/users.png')}}" width="40"> User Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="mail@gmail.com">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Category</label>
                                    <select name="type" class="form-control">
                                       <option value="1">Admin</option>
                                       <option value="2">Staff</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="**********">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <a href="{{ route('usersdashboard') }}" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-info">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection