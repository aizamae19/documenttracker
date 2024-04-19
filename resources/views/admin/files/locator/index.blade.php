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
                    <form method="POST" action="{{route('locator.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <span class="fa fa-file"> Locator</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>YEAR</p>
                                                <input type="text" class="form-control" name="Year">           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>MONTH OF</p>
                                                <input type="text" class="form-control" name="MonthOf">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>NAME OF EMPLOYEE</p>
                                                <input type="text" class="form-control" name="NameOfEmployee">        
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>DESIGNATION</p>
                                                <input type="text" class="form-control" name="Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>OFFICE</p>
                                                <select name="Office" class="form-control" required=""  >
                                                         <option enabled>Select Office</option>
                                                          <option>OFFICE OF THE CITY MAYOR</option>
                                                          <option>OFFICE OF THE CITY BUDGET OFFICER</option>
                                                          <option>OFFICE OF THE CITY ACCOUNTANT</option>
                                                          <option>OFFICE OF THE CITY GENERAL SERVICES OFFICER</option>   
                                                          <option>OFFICE OF THE CITY AGRICULTURIST</option>
                                                          <option>DILG CITY OFFICE</option>
                                                          <option>OFFICE OF THE CITY ADMINISTRATOR</option>
                                                          <option>OFFICE OF THE CITY LEGAL OFFICER</option>
                                                          <option>OFFICE OF THE CITY TREASURER</option>
                                                          <option>OFFICE OF THE CITY ASSESSOR</option>
                                                          <option>OFFICE OF THE CITY ENGINEER</option>
                                                          <option>OFFICE OF THE CITY HEALTH OFFICER</option>
                                                          <option>OFFICE OF THE CITY VETERINARIAN</option>
                                                          <option>OFFICE OF THE CITY CIVIL REGISTRAR</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - MARKET OPERATION</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - TERMINAL OPERATION</option>
                                                          <option>LOCAL ECONOMIC ENTERPRISE - SLAUGHTERHOUSE OPERATION</option>
                                                          <option>OFFICE OF THE CITY DISASTER RISK REDUCTION AND MANAGEMENT OFFICER</option>
                                                          <option>CITY INVESTMENT PROMOTIONS AND TOURISM OFFICE</option>
                                                          <option>OFFICE OF THE VICE MAYOR AND THE SANGGUNIANG PANLUNGSOD</option>
                                                          <option>OFFICE OF THE SECRETARY TO THE SANGGUNIANG PANLUNGSOD</option>
                                                          <option>OFFICE OF THE CITY HUMAN RESOURCE MANAGEMENT AND DEVELOPMENT OFFICER</option>
                                                          <option>OFFICE OF THE CITY PLANNING AND DEVELOPMENT COORDINATOR</option>
                                                          <option>OFFICE OF THE CITY ENVIRONMENT AND NATURAL RESOURCES MANAGEMENT OFFICER</option>
                                                          <option>OFFICE OF THE CITY SOCIAL WELFARE AND DEVELOPMENT OFFICER</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <table class="html-table">
                                        <tr>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">DATE</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">ETD<br>Expected Time of Departure</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">ETR<br>Expected Time of Return</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">TIME DEVIATION for ETR</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">OFFICIAL or PERSONAL?</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">PURPOSE/REASON</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">APPROVAL/<br>DISAPPROVAL By HoO</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">Request for Transpo<br>If Yes, to be signed by Motorpool & Driver</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">Office/Establishment<br>Visited<br>Date & Time Visited</th>
                                            <th class="tableh" style="text-align:center; font-size: 12px;">Confirmation of Appearance<br>Name & Signature of Attending Employee</th>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                        <tr>
                                            <td class="tr-td"><input type="text" class="input" name="Date"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfDeparture"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ExpectedTimeOfReturn"></td>
                                            <td class="tr-td"><input type="text" class="input" name="TimeDeviation"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficialOrPersonal"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Purpose"></td>
                                            <td class="tr-td"><input type="text" class="input" name="Approval"></td>
                                            <td class="tr-td"><input type="text" class="input" name="RequestForTranspo"></td>
                                            <td class="tr-td"><input type="text" class="input" name="OfficeEstablishmentVisited"></td>
                                            <td class="tr-td"><input type="text" class="input" name="ConfirmationOfAppearance"></td>
                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
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

        <style>
            .html-table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .tr-td, .tableh {
                border: 1px solid #000;
                text-align: left;
                padding: 1px;
            }
        </style>
@endsection