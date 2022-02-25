@extends('layout.layout')

@section('content')




<section class="sub-banner">
      <div class="container">
        <div class="position-center-center">
          <h2>Event Details</h2>
          
        </div>
      </div>
</section>

<section>
	@foreach($user_data as $user)
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="evbox">
				<h4>Buyrer Detail</h4>
				<div class="evdetailbox">
					<table class="table table-borderless">
  						  <tr>
  						    <th scope="row">Name:</th>
  						    <td>{{$user->name}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Email:</th>
  						    <td>{{$user->email}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Location:</th>
  						    <td>CUI, Wah Cantt</td>
  						    
  						  </tr>
  						
					</table>
					@endforeach
				</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="evbox">
				<h4>Seller Detail</h4>
				@foreach($seller_data as $seller)
				<div class="evdetailbox">
          <form action="/conformation/{{$seller->id}}">
					<table class="table table-borderless">
  						  <tr>
  						    <th scope="row">Name:</th>
  						    <td>{{$seller->name}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Email:</th>
  						    <td>{{$seller->email}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Role:</th>
  						    <td>{{$seller->role}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Location:</th>
  						    <td>{{$seller->city}}</td>
  						  </tr>
  						  <tr>
  						    <th scope="row">Select Package:</th>
  						    <td colspan="2">
  						    <input type="radio" name="pkg" value="Basic"> Basic
							   <input type="radio" name="pkg" value="Standard"> Standard
							   <input type="radio" name="pkg" value="Premium"> Premium
							</td>
  						    
  						  </tr>
  						
					</table>
					
				</div>
			
				</div>
				
			</div>
		</div>
		<div class="row">
			
				<button type="submit" style="float: right;" class="btn">Proceed To Payment</button>
        </form>
			 @endforeach
		</div>
	</div>
</section>

<br><br><br><br>

@endsection


