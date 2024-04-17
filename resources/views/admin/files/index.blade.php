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
            <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#applicationforleaveTab">Application for Leave</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#certificateofappearanceTab">Certificate of Appearance</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tripticketTab">Trip Ticket</a>
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
               <br>
            <div class="tab-content">
                  <div id="applicationforleaveTab" class="container-fluid tab-pane active">
                     <div class="col-md-12">
                        <table id="itemSearchTab" class="table table-hover">
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
                              @foreach($applicationforleaves as $key => $applicationforleave)
                                 <tr>
                                    <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                                    <td>{{ substr($applicationforleave->created_at, 0, 6) . $SeriesNumber }}</td>
                                    <td>{{ $applicationforleave->Office }}</td>
                                    <td>{{ $applicationforleave->Name }}</td>
                                    <td>{{ substr($applicationforleave->created_at, 0, 10)}}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href=""data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
                                    </td>
                                 </tr>
                              @endforeach
                              @endif
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <div id="dispatchTab" class="container-fluid tab-pane">
                     <div class="col-md-12">
                        <table id="itemSearchTab" class="table table-hover">
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
                              @if(isset($dispatches))
                              @foreach($dispatches as $key => $dispatches)
                                 <tr>
                                    <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                                    <td>{{ substr($dispatches->created_at, 0, 6) . $SeriesNumber }}</td>
                                    <td>{{ $dispatches->Office }}</td>
                                    <td>{{ $dispatches->Name }}</td>
                                    <td>{{ substr($dispatches->created_at, 0, 10)}}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href=""data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> View</a>
                                       <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
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
                        <table id="itemSearchTab" class="table table-hover">
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
                              @if(isset($certificateofappearances))
                              @foreach($certificateofappearances as $key => $certificateofappearance)
                                 <tr>
                                    <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                                    <td>{{ substr($certificateofappearance->created_at, 0, 6) . $SeriesNumber }}</td>
                                    <td>{{ $certificateofappearance->Office }}</td>
                                    <td>{{ $certificateofappearance->Name }}</td>
                                    <td>{{ substr($certificateofappearance->created_at, 0, 10)}}</td>
                                    <td class="text-center">
                                       <a class="btn btn-sm btn-success" href=""data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> View</a>
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
                        <table id="itemSearchTab" class="table table-hover">
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
                              @if(isset($locators))
                              @foreach($locators as $key => $locator)
                              <tr>
                                 <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                                 <td>{{ substr($locator->created_at, 0, 6) . $SeriesNumber }}</td>
                                 <td>{{ $locator->Office }}</td>
                                 <td>{{ $locator->NameOfEmployee }}</td>
                                 <td>{{ substr($locator->created_at, 0, 10)}}</td>
                                 <td class="text-center">
                                    <a class="btn btn-sm btn-success" href=""data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> View</a>
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
        <table id="itemSearchTab" class="table table-hover">
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
                    @foreach($travelorders as $key => $travelorder)
                        <tr>
                            <?php 
                            $SeriesNumber = sprintf('%06d', $key + 1); 
                            
                            // Fetch the office code for the current office
                            $office = App\Models\Office::where('OfficeName', $travelorder->Office)->first();
                            $officeCode = $office ? $office->Code : '';
                            ?>
<td>{{ date('Y') . '-' . $officeCode . '-' . $SeriesNumber }}</td>
                            <td>{{ $travelorder->Office }}</td>
                            <td>{{ $travelorder->NameOfEmployee }}</td>
                            <td>{{ substr($travelorder->created_at, 0, 10) }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-success" href="" data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> View</a>
                                <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
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
@endsection 
