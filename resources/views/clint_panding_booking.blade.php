@extends('layout.layout')

@section('content')




<section class="profile-banner">
      <div class="container">
        <div class="position-center-center">
          
             
            	<img src="/images/members/{{$clintData['img']}}" style="height: 200px; border-radius: 50px; float: center; border: 10px solid white;">
              <h4 style="color: white;"><b>{{$clintData['name']}} <i class="fa fa-check-square" style="color: #2baae1;"></i></b></h4> 
              <h6 style="color: white; font-weight: bold;">{{$clintData['role']}}</h6>
             <!--  <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div> -->
              
            
        </div>
      </div>
    </section>
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
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                    </a>
                                </div>

                            @endif
<section class="portfolio-detail">
      
      <!--======= DETAIL =========-->
      <div class="folio-detail sectoion-100px">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
            	<img src="/images/members/{{$clintData['img']}}" style="height: 100px; border-radius: 50px; float: center;">
              <h4><b>{{$clintData['name']}}</b></h4>
              <h6 style="color: #2baae1; text-transform: lowercase; font-weight: bold; letter-spacing: 0px;">Verified <i class="fa fa-check-square" style="color: #2baae1;"></i></h6>
        
              <h6 style="font-weight: bold;">{{$clintData['role']}}</h6>
              <!-- <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div> -->
              
            </div>
            @if($bookingData != "")
            <center><h4><p>---No pendings---</p></h4></center>
            @endif
          @foreach($bookingData as $bookingDatas)
     

      @if($bookingDatas->status =="Pending")
      <div class="col-12 col-sm-4 myCard singleBookingCard singleBookingCardPen">
      
        <h2 class="my-card-heading">{{$bookingDatas['status']}}</h2>    
        <div class="b-desc">
          <h5>Details</h5>
          <p>  <b>Name of {{$sellerData['role']}}: </b>{{$sellerData['name']}}</p>
          <p><b>Email:</b> {{$sellerData['email']}}</p>
          <p><b>address:</b> {{$sellerData['city']}}</p>
          <p><b>Time & Date:</b> {{$bookingDatas['created_at']}}</p>
          <p><b>amount:</b> {{$bookingDatas['amount']}}</p>
          <p><b>Payment:</b> Done</p>
        </div>
                      
      </div>
     @endif
          </div>
         @endforeach
        </div>
      </div>
    </section>
@endsection