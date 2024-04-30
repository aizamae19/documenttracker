<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p><img src="{{asset('assets/img/MaasinCity.png')}}" style="margin: 0 auto 0 0; display: block; top: 1%; width: 4%; left: 428px;position: absolute;"></p>
    <table style="float: left;border: none;width:819.0pt;border-collapse:collapse;margin-left:7.5pt;margin-right:7.5pt; top: 45%;">
        <tbody>
            <tr>
                <td colspan="11" style="width: 819pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:12px;color:black;"><strong>CITY GOVERNMENT OF MAASIN</strong></span></p>
                </td>
            </tr>
            <tr>
                <td colspan="11" style="width: 819pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">MAASIN CITY, SOUTHERN LEYTE</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 58.95pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 2.9159%; padding: 0.75pt; height: 14.45pt; vertical-align: bottom;position: absolute;">Year_________________________ </td>
                  <td >{{$locator->Year}}</td>
                <td style="text-align: left; "></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 21.9675%; padding: 0.75pt; height: 14.45pt; vertical-align: bottom;" colspan="2">Month of {{$locator->MonthOf}}</td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td colspan="10" style="width:815.25pt;border:solid windowtext 1.0pt;background:#FF99FF;padding:.75pt .75pt .75pt .75pt;height:14.45pt;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:11px;color:black;">EMPLOYEE LOCATOR</span></strong></p>
                </td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td colspan="3" rowspan="2" style="width:156.35pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.75pt .75pt .75pt .75pt;height:10.7pt;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:11px;color:black;">NAME OF EMPLOYEE</span></strong></p>
                </td>
                <td colspan="3" rowspan="2" style="width:230.8pt;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.75pt .75pt .75pt .75pt;height:10.7pt;">{{$locator->NameOfEmployee}}<br></td>
                <td rowspan="2" style="width:100.8pt;border-top:none;border-left:  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:10.7pt;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:11px;color:black;">DESIGNATION</span></strong></p>
                </td>
                <td colspan="2" rowspan="2" style="width: 192.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0.75pt;height: 10.7pt;vertical-align: middle;text-align: center;">{{$locator->Designation}}<br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 10.7pt;vertical-align: bottom;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">OFFICE</span></p>
                </td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 10.7pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;text-align: center;">{{$locator->Office}}<br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 58.95pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: top;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black; vertical-align: middle;position: absolute;left: 45px; top: 165px;">DATE</span></p>
                </td>
                <td rowspan="3" style="width: 52.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">ETD&nbsp;<br>&nbsp;EXPECTED Time&nbsp;<br>&nbsp;of Departure&nbsp;</span></p>
                </td>
                <td rowspan="3" style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">&nbsp;ETR Expected TIME OF Return</span></p>
                </td>
                <td rowspan="3" style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">&nbsp;Time Deviation&nbsp;<br>for ETR</span></p>
                </td>
                <td rowspan="3" style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">OFFICIAL OR PERSONAL?</span></p>
                </td>
                <td rowspan="3" style="width: 136.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">PURPOSE/REASON</span></p>
                </td>
                <td rowspan="3" style="width: 123.8pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;
                text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">APPROVAL/DISAPPROVAL<br> BY HoO</span></p>
                </td>
                <td rowspan="3" style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;
                text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">Request For Transpo<br>&nbsp;If Yes, to be signed by Motorpool &amp; Driver</span></p>
                </td>
                <td rowspan="3" style="width: 109.9pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;
                text-align: center;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">Office/Establishment Visited Date &amp; Time Visited</span></p>
                </td>
                <td rowspan="3" style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid windowtext;padding: 0.75pt;height: 0.7pt;vertical-align: middle;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:11px;color:black;">Confirmation of Appearance Name &amp; Signature of Attending Employee&nbsp;</span></p>
                </td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 0.7pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 3.75pt;padding: 0.75pt;height: 26.2pt;vertical-align: bottom;"><br></td>
            </tr>
         <tr><?php
                                        $Date = explode(',', $locator->Date);
                                        $ExpectedTimeOfDeparture = explode(',', $locator->ExpectedTimeOfDeparture);
                                        $ExpectedTimeOfReturn = explode(',', $locator->ExpectedTimeOfReturn);
                                        $TimeDeviation = explode(',', $locator->TimeDeviation);
                                        $OfficialOrPersonal = explode(',', $locator->OfficialOrPersonal);
                                        $Purpose = explode(',', $locator->Purpose);
                                        $Approval = explode(',', $locator->Approval);
                                        $RequestForTranspo = explode(',', $locator->RequestForTranspo);
                                        $OfficeEstablishmentVisited = explode(',', $locator->OfficeEstablishmentVisited);
                                        $ConfirmationOfAppearance = explode(',', $locator->ConfirmationOfAppearance);

                                        if ($Date !== null && $ExpectedTimeOfDeparture !== null && $ExpectedTimeOfReturn !== null && $TimeDeviation !== null && $OfficialOrPersonal !== null && $Purpose !== null && $Approval  !== null && $RequestForTranspo !== null && $OfficeEstablishmentVisited !== null && $ConfirmationOfAppearance !== null ) {
                                        for($x = 0; $x < count($Date); $x++) {
                                    ?>
                <td style="width: 83.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: middle;font-size: 12px;text-align: center;">{{ $Date[$x]}}</td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{ $ExpectedTimeOfDeparture[$x]}}</td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{ $ExpectedTimeOfReturn[$x]}}</td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{ $TimeDeviation[$x]}}</td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{ $OfficialOrPersonal[$x]}}</td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{$Purpose[$x]}}</td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{$Approval[$x]}}</td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;font-size: 12px;">{{$RequestForTranspo[$x]}}</td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle;text-align: center;font-size: 12px;">{{$OfficeEstablishmentVisited[$x]}}</td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: middle; text-align: center;">{{$ConfirmationOfAppearance[$x]}}</td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;font-size: 12px;"></td>
            </tr>
             <?php
                                        }
                                    }
                                    ?>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;font-size: 12px;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
            <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
             <tr>
                <td style="width: 58.95pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 51.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 45.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 74.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 49.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 106.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 143.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 77.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 114.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 92.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            <tr>
<<<<<<< HEAD
                
=======
               
>>>>>>> origin/main
                <td colspan="6" style="width: 387.15pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">SIGNATURE OF EMPLOYEE</span></p>
                </td>
                <td colspan="4" style="width: 428.1pt;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: 1pt solid black;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;">
                    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">SIGNATURE OF HEAD OF OFFICE</span></p>
                </td>
                <td style="width: 3.75pt;padding: 0.75pt;height: 14.45pt;vertical-align: bottom;"><br></td>
            </tr>
        </tbody>
    </table>
    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;font-family:"Times New Roman","serif";'><img src="data:image/png;base64,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" alt="image" style="width: 1085px;
    height: 50.43px;
    margin-left: 10px;"></span></p>
    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'>&nbsp;</p>
    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;font-family:"Times New Roman","serif";'>&nbsp;</span></p>
    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'><span style='font-size:16px;font-family:"Times New Roman","serif";'>&nbsp;</span></p>
    <p style='margin:0in;margin-bottom:.0001pt;font-size:13px;font-family:"Calibri","sans-serif";'>&nbsp;</p>
    <p><br></p>
    <p><br></p>
</body>

</html>