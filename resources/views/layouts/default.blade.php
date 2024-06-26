<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Document Tracking System</title>
   <link rel="icon" type="image/ico" href="{{asset('assets/img/MaasinCity.png')}}">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/list.css')}}">
   <link rel="stylesheet" href="{{asset('assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <style type="text/css">
      table tr td {
         padding: 0.3rem !important;
      }
      table tr td p{
         margin-top: -0.8rem !important;
         margin-bottom: -0.8rem !important;
         font-size: 0.9rem;
      }
      td a.btn{
         font-size: 0.7rem;
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #ee7699">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#">
                  <i class="fas fa-solid fa-bell"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('signout') }}">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
         <img src="{{asset('assets/img/MaasinCity.png')}}" alt="DSMS Logo" width="60">
         <img src="{{asset('assets/img/logo.png')}}" alt="DSMS Logo" width="175">
         </a>
         <div class="brand-link">
         <a href="">
            <img src="{{asset('assets/img/avatar.png')}}" class="img-circle" alt="User Image"style="display: block;margin-left: auto; margin-right: auto; width: 30%;">
         </a>
            @if(Auth::check())
               <p style="text-align: center;">{{ Auth::user()->name }}</p>
            @endif
         </div>
                     
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="{{ route('admindashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/dashboard.png')}}" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('filedashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/file.png')}}" width="30">
                        <p>
                           Document
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('documenttrackerdashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/tracker.png')}}" width="30">
                        <p>
                           Document Tracker
                        </p>
                     </a>
                  </li>
                  <!-- <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="{{asset('assets/img/commit.png')}}" width="30">
                        <p>
                           Commit
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="commit-file.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Commit Files</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="commit-details.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Commit Details</p>
                           </a>
                        </li>
                     </ul>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="{{asset('assets/img/logs.png')}}" width="30">
                        <p>
                           Logs
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="document-logs.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Document Logs</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="user-logs.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>User Logs</p>
                           </a>
                        </li>
                     </ul>
                  </li> -->
                  <li class="nav-item">
                     <a href="{{ route('usersdashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/users.png')}}" width="30">
                        <p>
                           Users
                        </p>
                     </a>
                  </li>
                  <!-- <li class="nav-item">
                     <a href="database.html" class="nav-link">
                        <img src="{{asset('assets/img/db.png')}}" width="30">
                        <p>
                           Database
                        </p>
                     </a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a href="settings.html" class="nav-link">
                        <img src="{{asset('assets/img/settings.png')}}" width="30">
                        <p>
                           Office Settings
                        </p>
                     </a>
                  </li> -->
               </ul>
            </nav>
         </div>
      </aside>
      <div class="content-wrapper" style="background-color: white">
         @yield('content')
      </div>
   </div>
   <!-- jQuery -->
   <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/js/adminlte.js')}}"></script>
   <script src="{{asset('assets/js/script.js')}}"></script>
   <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
   <script type="text/javascript">
     $(document).ready(function () {
    $("#applicationforleave tfoot tr th").each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder=" Search' + title + ' " />');
    });

    var table = $("#applicationforleave, #certificateofappearance, #dispatch, #locator, #travelorder, #users").DataTable({
        dom: '<"dt-buttons"Bf><"clear">lirtp',
        paging: true,
        autoWidth: true,
        initComplete: function (settings, json) {
            var footer = $("#applicationforleave tfoot tr");
            $("#applicationforleave thead").append(footer);
        },
    });

    $("#applicationforleave thead").on("keyup", "input", function () {
        table.column($(this).parent().index()).search(this.value).draw();
    });

    $('#startdate, #enddate').on('change', function () {
        var startDate = $('#startdate').val();
        var endDate = $('#enddate').val();

        // Display the selected date range in the table
        $('#dateRangeDisplay').text(startDate + ' to ' + endDate);

        // Custom filtering function to filter by date range
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var min = new Date(startDate);
                var max = new Date(endDate);
                var date = new Date(data[3]); 

                if ((startDate === "" && endDate === "") ||
                    (startDate === "" && date <= max) ||
                    (min <= date && endDate === "") ||
                    (min <= date && date <= max)) {
                    return true;
                }
                return false;
            }
        );

        table.draw();

        $.fn.dataTable.ext.search.pop();
    });
});



       document.getElementById('print-button').addEventListener('click', function () {
           var printContents = document.getElementById('table-container').innerHTML;
           var originalContents = document.body.innerHTML;

           document.body.innerHTML = printContents;

           window.print();

           document.body.innerHTML = originalContents;
       });
   </script>
</body>
</html>