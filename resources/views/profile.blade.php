@extends('layout.layout')

@section('content')




<section class="profile-banner">
      <div class="container">
        <div class="position-center-center">
          
             
            	<img src="/images/members/{{$info['img']}}" style="height: 200px; border-radius: 50px; float: center; border: 10px solid white;">
              <h4 style="color: white;"><b>{{$info['name']}} <i class="fa fa-check-square" style="color: #2baae1;"></i></b></h4>
              
              <h6 style="color: white; font-weight: bold;">{{$info['role']}}</h6>
              @if($user = Session::get('user'))
              @if($user == 'FreeLancer' || $user == 'Company')
              <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div>
              @endif
              @endif
            
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
            
            	<img src="/images/members/{{$info['img']}}" style="height: 100px; border-radius:50%; float: center;">
              <h4><b>{{$info['name']}}</b>
              <span style="color: #2baae1; text-transform: lowercase; font-weight: bold; letter-spacing: 0px; font-size: 12px;">Verified <i class="fa fa-check-square" style="color: #2baae1;"></i></span></h4>
              
              @if($user = Session::get('user'))
            @if($user == 'FreeLancer' || $user == 'Company')
 <h6>From {{$info['city']}}</h6> 
              <h6 style="font-weight: bold;">{{$info['role']}}</h6>
              <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div>
              @endif @endif
              
            </div>
            @if($user = Session::get('user'))
            @if($user == 'clint')
    <div class="adminheaddash">
     <center>
  <h4><b>Dashboard</b></h4>
  <hr style="width: 40%;">
  </center>
</div>

<br><br><br><br>
<div class="container">
  <div class="row">
    
    <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <center>
          <div class="dash-img"><img src="/dash/617 - Manage Data.png"></div>
          <div class="dash-tit"><p><b>{{$info['name']}}'s Panding Bookings</p></b></div>
          <div class="dash-desc"><a href="/clintPandingBooking"><b>View Panding Booking</b></a></div>
          </center>
        </div>
        
      </div>
    </div>
     <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <center>
          <div class="dash-img"><img src="/dash/630 - Edit.png"></div>
          <div class="dash-tit"><p><b>{{$info['name']}}'s Complete Bookings</b></p></div>
          <div class="dash-desc"><a href="/clintCompleteBooking"><b>View Complete Booking</b></a></div>
          </center>
        </div>
        
      </div>
    </div>
  </div>
  <br>
    <br><br>
</div>
            @endif @endif
            @if($user = Session::get('user'))
            @if($user == 'FreeLancer' || $user == 'Company')
            <div class="col-md-9">
              <form>
              <div class="inner-row description">
              <aside>
              <h4 class="alt hint--top" data-role="hint" data-hint-text="Tell us more about yourself. Buyers are also interested in learning about you as a person."><b>About Me</b>
              <a data-toggle="modal" data-target="#Adddescription" style="float: right; font-size: 13px; text-transform: none; font-weight: bold;"><i class="fa fa-edit"></i> Edit Description</a>
              </h4>
                              <!-- MODAL FOR desciption Option -->
         
                  <!-- MODAL FOR Buy Now Option -->
         <form action="/add_disciption" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="Adddescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="Description">Description </label>
                    <input id="Description" name="Description" type="text"  class="form-control validate" value="{{$info['description']}}" required/>
                </div>     
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Processed</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
       
        <!-- ----------------------------------------------------------------- -->
              </aside>
              <section>
                @if($info['description'] == "")
                  <p style=" font-size: 14px;"><b>No Description.</b>If want to add then click on <b>Edit Description</b>.</p>
                @else
                  <p style=" font-size: 14px;">{{$info['description']}}</p>
                @endif
              
              </section>
              </div>
              </form>
              <div>
              <h4>
				      <p style="color: black;"><b>Portfolio Link: </b></p>
              <a href="#" style="float: right; font-size: 13px; text-transform: none; font-weight: bold;"><i class="fa fa-edit"></i> Edit Portfolio</a>
              </h4> 
              <a href="https://drive.google.com/drive/folders/1DVH6Nc120iWYVYdn8KCJ04rdeb2s6rnV?usp=sharing" class="link" style="color: blue; font-weight: bold; font-style: italic;">https://drive.google.com/drive/folders/1DVH6Nc120iWYVYdn8KCJ04rdeb2s6rnV?usp=sharing</a>
              </div>
              <!--======= SOCIAL =========-->
              <ul class="social_icons margin-top-20">
                <li class="margin-right-20">
                  <h4 class="margin-top-15"><strong>Share this profile on</strong></h4>
                </li>
                <li class="facebook"><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#." class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="#." class="linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>

            @endif @endif

            @if($user == 'FreeLancer' || $user == 'Company')
              <form >
              
                <button type="submit" class="btnsr"  formaction="/sellerPendingBooking" style="width: 210px; text-align: center;">Pending booking</button>
                <button type="submit" class="btnsr" formaction="/sellerAcceptedBooking" style="width: 210px; text-align: center;">Complete booking</button>
              
              </form>
              @endif
          </div>
          
         
 @if($user = Session::get('user'))
            @if($user == 'FreeLancer' || $user == 'Company')
     
      <section class="sectoion-100px no-padding-b portfolio padding-left-50 padding-right-50" >
    
      <div class="container-fluid">
        

           <div>
        <span><h4><b>My Portfolio</b></h4></span> <a style="font-size: 13px;"><button class="btnsr" data-toggle="modal" data-target="#Addphoto" role='button' type="button"> <i class="fa fa-plus-circle fa-1x"> Add Photo</i>  </button></a> 
        </div>
        <hr>
        <ul class="port-folio-row no-margin-t folio-simple row col-4">
          
      @foreach($sellerdata as $row)
          <li class="item">
            <article> <img src="/images/upload_images/{{$row['name']}}" alt=""> 
             
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  
                </div>
              </div>
            </article>
          </li>
    
         @endforeach
        </ul>
      </div>
     
                                     <!-- MODAL FOR photo Now Option -->
         <form action="/uploadphoto" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="Addphoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD PICTURES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <input name="file[]" type="file" multiple  class="form-control validate" />
                </div>
                       
                       
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
      </div>
        </form>
    </section>


@endif @endif

         
        </div>
      </div>
    </section>

 @if($user = Session::get('user'))
            @if($user == 'FreeLancer' || $user == 'Company')
           
    <section class="pricing sectoion-100px" style="margin-top: -100px;">
      <div class="container"> 
     <form action="/priceform/{{$info['id']}}">
        <div class="tittle">
          <h4><b>{{$info['name']}}'s Pricing Plans</b></h4>
          <h5><a><button class="btnsr" type="submit"><i class="fa fa-plus-circle fa-1x"> Add Plans</i> </button> </a></h5>
        </div>
        
      </form>
        <div class="row"> 
          
        @if($priceplandata != "")
          <div class="col-md-4">
            <div class="plan-in">
              <h5><i class="icon"><img src="images/icon-7.png"></i> Basic</h5>
              <div class="price"> <span class="huge-text">Rs. {{$priceplandata['basic_price' ?? null]}}</span> <span class="month">PER HOUR</span> </div>
              <ul>
                <li> {{$priceplandata['basic_title']}} </li>
                <li> Upto {{$priceplandata['basic_pic']}} pics</li>
                <li> {{$priceplandata['basic_workhour']}} Hour Time </li>
                <li> {{$priceplandata['basic_location']}}</li>
                <li> {{$priceplandata['basic_poses']}}</li>
                <li> {{$priceplandata['basic_Dpic']}} Pic's Developed</li>
              </ul>
              <a href="/eventDetail/{{$info['id']}}" class="btn">Select</a> </div>
          </div>
          
          <!-- Plan  -->
          <div class="col-md-4">
            <div class="plan-in">
              <h5> <i class="icon"><img src="images/icon-8.png"></i> Stander</h5>
              <div class="price"> <span class="huge-text">Rs. {{$priceplandata['stand_price']}}</span> <span class="month">PER HOUR</span> </div>
              <ul>
                 <li> {{$priceplandata['stand_title']}} </li>
                <li> Upto {{$priceplandata['stand_pic']}} pics</li>
                <li> {{$priceplandata['stand_workhour']}} Hour Time </li>
                <li> {{$priceplandata['stand_location']}}</li>
                <li> {{$priceplandata['stand_poses']}}</li>
                <li> {{$priceplandata['stand_Dpic']}} Pic's Developed</li>
              </ul>
              <a href="/eventDetail/{{$info['id']}}" class="btn">Select</a> </div>
          </div>
          
          <!-- Plan  -->
          <div class="col-md-4">
            <div class="plan-in">
              <h5> <i class="icon"><img src="images/icon-9.png"></i> unlimited</h5>
              <div class="price"> <span class="huge-text">Rs. {{$priceplandata['p_price']}}</span> <span class="month">PER HOUR</span> </div>
              <ul>
                 <li> {{$priceplandata['p_title']}}  </li>
                <li> Upto {{$priceplandata['p_pic']}}  pics</li>
                <li> {{$priceplandata['p_workhour']}} Hour Time </li>
                <li> {{$priceplandata['p_location']}}</li>
                <li> {{$priceplandata['p_poses'] }}</li>
                <li> {{$priceplandata['p_Dpic']}}  Pic's Developed</li>
              </ul>
              <a href="/eventDetail/{{$info['id']}}" class="btn">Select</a> </div>
          </div>
          @else
          <h4>You Have No Plans</h4>
          <h5>If Want To Add Plans Please Click On <b>Add Plan</b> Button</h5>
          @endif
        </div>
      </div>
    </section>
 
    <section class="reviews">
    	<div class="container">
    		<h4><b>Reviews & Ratings</b></h4>
    		<hr>

    		<div class="row">
    			<div class="col-sm-8">
    				  
    @foreach($feedback as $row)
    <div class="row">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span> 
      
      <div class="rev-name">
        <h6 style="color: #a1a1a1;" > &nbsp;By Unknown </h6>
      </div>
        <p  style="width: 100%; border: hidden; color: #a1a1a1;">{{$row->feedback}}</p>
    </div>
    @endforeach
    <hr>
    			</div>
    		</div>
    	</div>
    	
    </section>
@endif @endif 
@endsection