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
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Application for Leave</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>1. OFFICE/DEPARTMENT</p>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>2. NAME (Last) (First) (Middle)</p>
                                                <input type="text" class="form-control">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>3. DATE OF FILING</p>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>4. POSITION</p>
                                                <input type="text" class="form-control">                 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>5. SALARY</p>
                                                <input type="text" class="form-control">                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                                <label style="text-align: center;">6. DETAILS OF APPLICATION</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>6.A TYPE OF LEAVE TO BE AVAILED OF</p>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Mandatory/Forced Leave(Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Sick Leave  (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Maternity Leave (R.A. No. 11210 / IRR issued by CSC, DOLE and SSS)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Paternity Leave (R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    10-Day VAWC Leave (RA No. 9262 / CSC MC No. 15, s. 2005)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox-x2" value="1" />
                                                    Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)
                                                </div>
                                                <div class="line">
                                                    <input type="checkbox" class="my-checkbox" value="1" />
                                                    Adoption Leave (R.A. No. 8552)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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