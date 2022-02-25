@extends('layout.layout')

@section('content')


<div class="container">
	
	<hr>
	<h5>Select Payment Method</h5>
	<hr>

	
	<div class="row btns-pay">
		<div class="col-sm-8">
		<button type="button" class="btn btn-info" onclick="Display1()">
			<center>
			<div class="payment-box">
				<img src="/jazzcash.jpg" style="height: 80px;">
				<h6>JazzCash Account</h6>
			</div>
			</center>
		</button>
		<button type="button" class="btn btn-info" onclick="Display2()">
			<center>
			<div class="payment-box">
				<img src="/easypaisa.png" style="height: 80px;">
				<h6>Easypasia Account</h6>
			</div>
			</center>
		</button>
		</div>
		<div class="col-sm-4 ord-summary-pay">
			
				<center>
				<h5 style="padding: 0px; text-transform: uppercase;">Booking Summary</h5>
				</center>
				<hr>
			 	<p><strong style="color: red;">Total Amount</strong><span style="float: right; color: red;"><strong>Rs. {{$pricetag}}</strong></span></p> 
			 	<hr>	
		</div>
	</div>
<form method="POST" action="/done_order/{{$pricetag}}/{{$seller_id}}" enctype="multipart/form-data" class="signup-form">
		{{ csrf_field() }}
		<div class="row detail-cod" id="showdiv1">

			<div class="col-sm-8">



				<hr>
			<strong>Save your JazzCash account now!</strong>
			<ol>
				<li>
					Ensure your JazzCash account is Active
				</li>
				<li>
					Successful transactions will automatically save your JazzCash account for future use
				</li>
				<li>
					To confirm your payment:
					<ul>
						<li>
							Telenor customers: Input your 5-digit PIN into the USSD prompt
						</li>
						<li>
							For other networks: Login to your JazzCash app > 
      						Tap on the top-left menu to approve the payment in "My Approvals"
						</li>
					</ul>
				</li>
			</ol>
			<p style="color: black;">JazzCash Account Number</p>
			<input type="text" name="" placeholder="Enter number here" style="width: 30%; border: 1px solid orange;"> <br><br>
			<button type="submit" class="btn btn-warning">CONFIRM BOOKING</button>
				<hr>
			</div>
		</div>




		<div class="row detail-easypaisa" id="showdiv2">
			<div class="col-sm-8">

				<hr>
			<strong>Save your Easypaisa account now!</strong>
			<ol>
				<li>
					Ensure your Easypaisa account is Active
				</li>
				<li>
					Successful transactions will automatically save your Easypaisa account for future use
				</li>
				<li>
					To confirm your payment:
					<ul>
						<li>
							Telenor customers: Input your 5-digit PIN into the USSD prompt
						</li>
						<li>
							For other networks: Login to your Easypaisa app > 
      						Tap on the top-left menu to approve the payment in "My Approvals"
						</li>
					</ul>
				</li>
			</ol>
			<p style="color: black;">Easypaisa Account Number</p>
			<input type="text" name="" placeholder="Enter number here" style="width: 30%; border: 1px solid orange;"> <br><br>
			<button type="submit" class="btn btn-warning">CONFIRM BOOKING</button>

			<hr>


			</div>
			</form>
		</div>

	</div>


<br><br><br>

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