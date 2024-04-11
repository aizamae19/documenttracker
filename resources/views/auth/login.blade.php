@extends('layouts.auth')

@section('content')

      <div class="limiter">
      <div class="container-login100" style="background-image: url('assets/img/bg-01.jpg');">
         <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{ route('login.custom') }}">
               <span class="login100-form-title p-b-10 p-t-10">
                  <img src="{{asset('assets/img/dts.png')}}" width="400" height="115">
               </span>
               @csrf
               <div class="wrap-input100 validate-input" data-validate = "Enter username">
                  <input class="input100" type="text" name="email" placeholder="Username">
                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
               </div>

               <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="password" placeholder="Password">
                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
               </div>

               <div class="contact100-form-checkbox">
                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                  <label class="label-checkbox100" for="ckb1">
                     Remember me
                  </label>
               </div>

               <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                     Login
                  </button>
               </div>

               <div class="text-center p-t-30">
                  <a class="txt1" href="#">
                     Forgot Password?
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
   

   <div id="dropDownSelect1"></div>
   
<!--===============================================================================================-->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/bootstrap/js/popper.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/daterangepicker/moment.min.js"></script>
   <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
   <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   <script src="js/main.js"></script>
@endsection