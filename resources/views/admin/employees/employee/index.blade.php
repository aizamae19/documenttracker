@extends('layouts.default')

@section('content')
            @include('layouts.partials.messages')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="{{route('employee.add')}}" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Employee ID</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($employees))
                                            @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->firstname}}</td>
                                                <td>{{$employee->middlename}}</td>
                                                <td>{{$employee->lastname}}</td>
                                                <td>{{$employee->eid}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->contact}}</td>
                                                <td>{{$employee->position}}</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="{{ url('/employee/index/edit/').'/'.$employee->id}}" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                             @endforeach
                                        @endif   
                                     </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection