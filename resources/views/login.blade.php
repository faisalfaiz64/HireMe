@extends('layout.layout')

@section('content')

<section class="login-banner">
      <div class="container">
        <div class="row justify-content-center signfrm">
           @if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>


@endif
@if(session()->has('message'))

@if(session()->get('message')=='404')
    <div class="alert alert-danger">
        Incorrect Email or Password
        </a>
    </div>
@else
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </a>
    </div>
@endif
@endif
          <center>
            <h3 style="text-transform: uppercase; color: white; font-size: 16px; font-weight: bold;">Select your account type:</h3>
            <button class="btn signbtn" onclick="Display1()" style="padding: 10px 55px;">
              Buyer Account
            </button>
            <button class="btn signbtn" onclick="Display2()" style="padding: 10px 55px;">
              Seller Account
            </button>
            <div class="foram">
          <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <i class="fa fa-camera fa-3x" aria-hidden="true" style="color: white;"></i><h4 style="letter-spacing: 6px;">HIREME</h4>
              <h6>Please Login Here</h6>
             </div>
          </div>
            


          <div class="forbuyers" id="showdiv1" style="display: none;">
            <form method="POST" action="/validateClintAccount">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <p class="rem-me"> <input type="checkbox" name=""> Remember Me</p>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn logbtn btn-block"><b>Login</b></button>
              </div>
            </form>
          </div>

          <div class="forsellers" id="showdiv2" style="display: none;">
             <form method="POST" action="/validateSellerAccount" enctype="multipart/form-data" class="signup-form">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <p class="rem-me"> <input type="checkbox" name=""> Remember Me</p>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn logbtn btn-block"><b>Login</b></button>
              </div>
            </form>
          </div>
          <div class="dontcom">
            <p class="dont">Don't have account?</p>
            <a href="/signups" id="signup">Sign up here</a>
          </div>
          </center>
        </div>
      </div>


<script>
function Display1() {
  var x = document.getElementById("showdiv1");
  var y = document.getElementById("showdiv2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.display = "none";
  }
}

function Display2() {
  var x = document.getElementById("showdiv2");
  var y = document.getElementById("showdiv1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
     y.style.display = "none";

  }
}
</script>

@endsection