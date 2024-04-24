@extends('layouts.default')

@section('content')
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0"><img src="{{asset('assets/img/file.png')}}" width="40"> List of Documents</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Documents</li>
               </ol>
            </div>
            <br>
            <a class="btn btn-sm btn-info elevation-4" href="#" data-toggle="modal" data-target="#add" style="margin-left: 7px;"><i class="fa fa-plus-square"></i> Add New</a>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="card card-info">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#applicationforleaveTab">Application for Leave</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#certificateofappearanceTab">Certificate of Appearance</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#dispatchTab">Dispatch</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#locatorTab">Locator</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#travelorderTab">Travel Order</a>
               </li>
            </ul>
            <div class="tab-content">
               <div id="applicationforleaveTab" class="container-fluid tab-pane active">
                  <div class="col-md-12">
                     <table id="applicationforleave" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>Office</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th class="text-center"></th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($applicationforleaves))
                              <?php
                                 $officeSeriesNumbers = [];
                              ?>
                              @foreach($applicationforleaves as $key => $applicationforleave)
                                 <tr>
                                    <?php
                                       $office = App\Models\Office::where('ShortName', $applicationforleave->Office)->first();
                                       $officeCode = $office ? $office->Code : '';
                                       
                                       if (!isset($officeSeriesNumbers[$applicationforleave->Office])) {
                                          $officeSeriesNumbers[$applicationforleave->Office] = 1;
                                       }
                                       $seriesNumber = $officeSeriesNumbers[$applicationforleave->Office]++;
                                       $seriesNumberPadded = sprintf('%06d', $seriesNumber);
                                    ?>
                                    <td>{{ date('Y') . '-' . sprintf('%03d', $officeCode) . '-' . $seriesNumberPadded }}</td>
                                    <td>{{ $applicationforleave->Office }}</td>
                                    <td>{{ $applicationforleave->Name }}</td>
                                    <td>{{ substr($applicationforleave->created_at, 0, 10) }}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href="{{ url('/admin/files/applicationforleave/view/').'/'.$applicationforleave->id}}" data-target="#view"><i class="fa fa-eye"></i> 
                                       View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> 
                                       Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                           @endif
                        </tbody>
                        <tfoot>
                           <tr>
                              <td>Series Number</td>
                              <td>Office</td>
                              <td>Name</td>
                              <th></th>
                              <th></th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>

               <div id="dispatchTab" class="container-fluid tab-pane">
                  <div class="col-md-12">
                     <table id="dispatch" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>Office</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th class="text-center"></th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($dispatches))
                              <?php
                                 $officeSeriesNumbers = [];
                              ?>
                              @foreach($dispatches as $key => $dispatches)
                                 <tr>
                                    <?php
                                       $office = App\Models\Office::where('ShortName', $dispatches->Office)->first();
                                       $officeCode = $office ? $office->Code : '';
                                       
                                       if (!isset($officeSeriesNumbers[$dispatches->Office])) {
                                          $officeSeriesNumbers[$dispatches->Office] = 1;
                                       }
                                       $seriesNumber = $officeSeriesNumbers[$dispatches->Office]++;
                                       $seriesNumberPadded = sprintf('%06d', $seriesNumber);
                                    ?>
                                    <td>{{ date('Y') . '-' . sprintf('%03d', $officeCode) . '-' . $seriesNumberPadded }}</td>
                                    <td>{{ $dispatches->Office }}</td>
                                    <td>{{ $dispatches->Name }}</td>
                                    <td>{{ substr($dispatches->created_at, 0, 10) }}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href="{{ url('/admin/files/dispatch/view/').'/'.$dispatches->id}}" data-target="#view"><i class="fa fa-eye"></i> 
                                       View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> 
                                       Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>

               <div id="certificateofappearanceTab" class="container-fluid tab-pane">
                  <div class="col-md-12">
                     <table id="certificateofappearance" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>Office</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th class="text-center"></th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($certificateofappearances))
                              <?php
                                 $officeSeriesNumbers = [];
                              ?>
                              @foreach($certificateofappearances as $key => $certificateofappearance)
                                 <tr>
                                    <?php
                                       $office = App\Models\Office::where('ShortName', $certificateofappearance->Office)->first();
                                       $officeCode = $office ? $office->Code : '';
                                       
                                       if (!isset($officeSeriesNumbers[$certificateofappearance->Office])) {
                                          $officeSeriesNumbers[$certificateofappearance->Office] = 1;
                                       }
                                       $seriesNumber = $officeSeriesNumbers[$certificateofappearance->Office]++;
                                       $seriesNumberPadded = sprintf('%06d', $seriesNumber);
                                    ?>
                                    <td>{{ date('Y') . '-' . sprintf('%03d', $officeCode) . '-' . $seriesNumberPadded }}</td>
                                    <td>{{ $certificateofappearance->Office }}</td>
                                    <td>{{ $certificateofappearance->Name }}</td>
                                    <td>{{ substr($certificateofappearance->created_at, 0, 10) }}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href="{{ url('/admin/files/certificateofappearance/view/').'/'.$certificateofappearance->id}}" data-target="#view"><i class="fa fa-eye"></i> View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
               <div id="locatorTab" class="container-fluid tab-pane">
                  <div class="col-md-12">
                     <table id="locator" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>Office</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th class="text-center"></th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($locators))
                              <?php
                                 $officeSeriesNumbers = [];
                              ?>
                              @foreach($locators as $key => $locator)
                                 <tr>
                                    <?php
                                       $office = App\Models\Office::where('ShortName', $locator->Office)->first();
                                       $officeCode = $office ? $office->Code : '';
                                       
                                       if (!isset($officeSeriesNumbers[$locator->Office])) {
                                          $officeSeriesNumbers[$locator->Office] = 1;
                                       }
                                       $seriesNumber = $officeSeriesNumbers[$locator->Office]++;
                                       $seriesNumberPadded = sprintf('%06d', $seriesNumber);
                                    ?>
                                    <td>{{ date('Y') . '-' . sprintf('%03d', $officeCode) . '-' . $seriesNumberPadded }}</td>
                                    <td>{{ $locator->Office }}</td>
                                    <td>{{ $locator->NameOfEmployee }}</td>
                                    <td>{{ substr($locator->created_at, 0, 10) }}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href="{{ url('/admin/files/locator/view/').'/'.$locator->id}}" data-target="#view"><i class="fa fa-eye"></i> View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>

               <div id="travelorderTab" class="container-fluid tab-pane">
                  <div class="col-md-12">
                     <table id="travelorder" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Series Number</th>
                              <th>Office</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(isset($travelorders))
                              <?php
                                 $officeSeriesNumbers = [];
                              ?>
                              @foreach($travelorders as $key => $travelorder)
                                 <tr>
                                    <?php
                                       $office = App\Models\Office::where('ShortName', $travelorder->Office)->first();
                                       $officeCode = $office ? $office->Code : '';
                                       
                                       if (!isset($officeSeriesNumbers[$travelorder->Office])) {
                                          $officeSeriesNumbers[$travelorder->Office] = 1;
                                       }
                                       $seriesNumber = $officeSeriesNumbers[$travelorder->Office]++;
                                       $seriesNumberPadded = sprintf('%06d', $seriesNumber);
                                    ?>
                                    <td>{{ date('Y') . '-' . sprintf('%03d', $officeCode) . '-' . $seriesNumberPadded }}</td>
                                    <td>{{ $travelorder->Office }}</td>
                                    <td>{{ $travelorder->Name }}</td>
                                    <td>{{ substr($travelorder->created_at, 0, 10) }}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href="{{ url('/admin/files/travelorder/view/').'/'.$travelorder->id}}" data-toggle="" data-target="#"><i class="fa fa-eye"></i>View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i>Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                           @endif
                        </tbody>
                     </table>
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
                                                      <a href="{{ route('applicationforleave') }}" class="form-control link" id="applicationforleaveLink">APPLICATION FOR LEAVE</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <div class="card-footer">
                                                      <a href="{{ route('certificateofappearance')}}" class="form-control" id="certificateofappearanceLink">CERTIFICATE OF APPEARANCE</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <div class="card-footer">
                                                      <a href="{{ route('tripticket')}}" class="form-control" id="tripticketLink">TRIP TICKET</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <div class="card-footer">
                                                      <a href="{{ route('getDispatch') }}" class="form-control" id="dispatchLink">DISPATCH</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <div class="card-footer">
                                                      <a href="{{ route('locator')}}" class="form-control" id="locatorLink">LOCATOR</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <div class="card-footer">
                                                      <a href="{{ route('travelorder')}}" class="form-control" id="travelorderLink">TRAVEL ORDER</a>
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
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection 