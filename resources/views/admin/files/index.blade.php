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
         <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#itemReportsTab">fgerg</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#customerReportsTab">df</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#saleReportsTab">dfdf</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#purchaseReportsTab">dfee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#vendorReportsTab">fdfe</a>
            </li>
          </ul>
      <section class="content">
    <div class="container-fluid">
        <div class="card card-info">
<<<<<<< HEAD
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
                                 <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                                 <td>{{ substr($travelorder->created_at, 0, 6) . $SeriesNumber }}</td>
                                 <td>{{ $travelorder->Office }}</td>
                                 <td>{{ $travelorder->NameOfEmployee }}</td>
                                 <td>{{ substr($travelorder->created_at, 0, 10)}}</td>
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

=======
            <br>
            <div class="col-md-12">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Series Number</th>
                            <th>Office</th>
                            <th>File Type</th>
                            <th>Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($travelorders as $key => $file)
                          <tr>
                              <?php $SeriesNumber = sprintf('%05d', $key + 1); ?>
                              <td>{{ substr($file->created_at, 0, 6) . $SeriesNumber }}</td>
                              <td>{{ $file->Office }}</td>
                              <td>{{ $file->FileType }}</td>
                              <td>{{ substr($file->created_at, 0, 10)}}</td>
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="{{ url('admin/files/index/view/').'/'.$file->id}}" data-toggle="" data-target=""><i class="fa fa-eye"></i> View</a>



                                 <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> Delete</a>
                                  {{method_field('DELETE') }}
                                  @csrf
                              </td>
                          </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
>>>>>>> origin/master
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
<<<<<<< HEAD
                                             <a href="{{ route('applicationforleave') }}" class="form-control link" id="applicationforleaveLink">APPLICATION FOR LEAVE</a>
=======
                                             <a href="{{ route('applicationforleave', ['FileType' => 'APPLICATION FOR LEAVE']) }}" class="form-control link" id="applicationforleaveLink">APPLICATION FOR LEAVE</a>
>>>>>>> origin/master
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
<<<<<<< HEAD
                                             <a href="{{ route('certificateofappearance')}}" class="form-control" id="certificateofappearanceLink">CERTIFICATE OF APPEARANCE</a>
=======
                                             <a href="{{ route('certificateofappearance', ['FileType' => 'CERTIFICATION OF APPEARANCE'])}}" class="form-control" id="certificateofappearanceLink">CERTIFICATE OF APPEARANCE</a>
>>>>>>> origin/master
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
<<<<<<< HEAD
                                             <a href="{{ route('tripticket')}}" class="form-control" id="tripticketLink">TRIP TICKET</a>
=======
                                             <a href="{{ route('tripticket', ['FileType' => 'TRIP TICKET'])}}" class="form-control" id="tripticketLink">TRIP TICKET</a>
>>>>>>> origin/master
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
<<<<<<< HEAD
                                             <a href="{{ route('getDispatch') }}" class="form-control" id="dispatchLink">DISPATCH</a>
=======
                                             <a href="{{ route('getDispatch', ['FileType' => 'DISPATCH']) }}" class="form-control" id="dispatchLink">DISPATCH</a>
>>>>>>> origin/master
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
<<<<<<< HEAD
                                             <a href="{{ route('locator')}}" class="form-control" id="locatorLink">LOCATOR</a>
=======
                                             <a href="{{ route('locator', ['FileType' => 'LOCATOR'])}}" class="form-control" id="locatorLink">LOCATOR</a>
>>>>>>> origin/master
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div class="card-footer">
<<<<<<< HEAD
                                             <a href="{{ route('travelorder')}}" class="form-control" id="travelorderLink">TRAVEL ORDER</a>
=======
                                             <a href="{{ route('travelorder', ['FileType' => 'TRAVEL ORDER'])}}" class="form-control" id="travelorderLink">TRAVEL ORDER</a>
>>>>>>> origin/master
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

<<<<<<< HEAD
=======
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#applicationforleaveLink').click(function() {
        $.ajax({
            type: "POST",
            url: "{{ route('storefile') }}", 
            data: {
                '_token': '{{ csrf_token() }}',
                'FileType': 'APPLICATION FOR LEAVE'
            },
            success: function(response) {
                console.log('File Type stored successfully:', response);
            },
            error: function(xhr, status, error) {
                console.error('Error storing File Type:', error);
            }
        });
    });
});
</script>

>>>>>>> origin/master
@endsection