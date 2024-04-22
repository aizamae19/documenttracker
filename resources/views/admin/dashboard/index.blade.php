@extends('layouts.default')

@section('content')
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="{{asset('assets/img/dashboard.png')}}" width="40"> Dashboard</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-1 offset-lg-2">
                     <div class="info-box">
                        <span class="info-box-icon text-success"><img src="{{asset('assets/img/leave.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Application For Leave</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>{{$applicationforleaves}}</h2>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-2 offset-lg-0">
                     <div class="info-box">
                        <span class="info-box-icon text-info"><img src="{{asset('assets/img/certificate.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Certificate of Appearance</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>{{$certificateofappearances}}</h2>
                           </span>
                        </div>
                     </div>
                  </div>

                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-1 offset-lg-2">
                     <div class="info-box">
                        <span class="info-box-icon text-success"><img src="{{asset('assets/img/dispatch.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Dispatch</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>{{$dispatches}}</h2>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-2 offset-lg-0">
                     <div class="info-box">
                        <span class="info-box-icon text-info"><img src="{{asset('assets/img/locator.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Locator</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>{{$locators}}</h2>
                           </span>
                        </div>
                     </div>
                  </div>

                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-1 offset-lg-2">
                     <div class="info-box">
                        <span class="info-box-icon text-success"><img src="{{asset('assets/img/travelorder.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Travel Order</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>{{$travelorders}}</h2>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-4 offset-sm-1 offset-md-2 offset-lg-0">
                     <div class="info-box">
                        <span class="info-box-icon text-info"><img src="{{asset('assets/img/tripticket.png')}}" width="50"></span>
                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Trip Ticket</h5>
                           </span>
                           <span class="info-box-number">
                              <h2></h2>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection      