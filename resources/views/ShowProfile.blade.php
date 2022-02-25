@extends('layout.layout')
@section('content')
<section class="profile-banner">
      <div class="container">
        <div class="position-center-center">
            	<img src="/images/members/{{$info['img']}}" style="height: 200px; border-radius: 50px; float: center; border: 10px solid white;">
              <h4 style="color: white;"><b>{{$info['name']}} <i class="fa fa-check-square" style="color: #2baae1;"></i></b></h4>    
              <h6 style="color: white; font-weight: bold;">{{$info['role']}}</h6>
              <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div>
              <div style="position: center";>
              <form action="/eventDetail/{{$info['id']}}">
              <button type="submit" class="btn btn-1 pull-right no-margin-top" style="background-color: #f44336; margin-right: 50px;">Hire Me</button>
              </form>
              </div> 
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
            	<img src="/images/members/{{$info['img']}}" style="height: 100px; border-radius: 50px; float: center;">
              <h4><b>{{$info['name']}}</b></h4>
              <h6 style="color: #2baae1; text-transform: lowercase; font-weight: bold; letter-spacing: 0px;">Verified <i class="fa fa-check-square" style="color: #2baae1;"></i></h6>
              <h6>From {{$info['city']}}</h6>
              <h6 style="font-weight: bold;">{{$info['role']}}</h6>
              <div class="foratings">
              	<span class="fa fa-star fa-2x checked"></span>
				<span class="fa fa-star fa-2x checked"></span>
					<span class="fa fa-star fa-2x checked"></span>
						<span class="fa fa-star fa-2x checked"></span>
							<span class="fa fa-star fa-2x"></span>
              </div>       
            </div>    
            <div class="col-md-9">
              <form>
              <div class="inner-row description">
              <aside>
              <h4 class="alt hint--top" data-role="hint" data-hint-text="Tell us more about yourself. Buyers are also interested in learning about you as a person."><b>About Me</b>
              </h4>
              </aside>
              <section>
              @if($info['description'] == "")
              <h4>No Description Available</h4>
              @else
              <p style=" font-size: 14px;">{{$info['description']}}</p>
              @endif
              </section>
              </div>
              </form>
              <div>
              <h4>
				      <p style="color: black;"><b>Portfolio Link: </b></p>
              </h4> 
              <a href="https://drive.google.com/drive/folders/1DVH6Nc120iWYVYdn8KCJ04rdeb2s6rnV?usp=sharing" class="link" style="color: blue; font-weight: bold; font-style: italic;">https://drive.google.com/drive/folders/1DVH6Nc120iWYVYdn8KCJ04rdeb2s6rnV?usp=sharing</a>
              </div>
            </div>
          </div>
      <section class="sectoion-100px no-padding-b portfolio padding-left-50 padding-right-50">   
      <div class="container-fluid">
      	 <center><h4><b>Portfolio</b></h4> <hr style="width: 10%; height: 1px;"></center>
        <ul class="port-folio-row no-margin-t folio-simple row col-4"> 
        @if($sellerdata == "")
          <h4>No Photo Available</h4>
        @else     
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
         @endif
        </ul>
      </div>
    </section>  
        </div>
      </div>
    </section>
    <section class="pricing sectoion-100px" style="margin-top: -100px;">
      <div class="container"> 
        <center><h4><b>Packages</b></h4> <hr style="width: 10%; height: 1px;"></center>
     <form action="/priceform/{{$info['id']}}">     
      </form>
        <div class="row">     
          <div class="col-md-4">
            <div class="plan-in">
              <h5><i class="icon"><img src="/images/icon-7.png"></i> Basic</h5>
              <div class="price"> <span class="huge-text">Rs. {{$priceplandata['basic_price']}}</span> <span class="month">PER HOUR</span> </div>
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
              <h5> <i class="icon"><img src="/images/icon-8.png"></i> Stander</h5>
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
              <h5> <i class="icon"><img src="/images/icon-9.png"></i> unlimited</h5>
              <div class="price"> <span class="huge-text">Rs. {{$priceplandata['p_price']}}</span> <span class="month">PER HOUR</span> </div>
              <ul>
                 <li> {{$priceplandata['p_title']}}  </li>
                <li> Upto {{$priceplandata['p_pic']}}  pics</li>
                <li> {{$priceplandata['p_workhour']}} Hour Time </li>
                <li> {{$priceplandata['p_location']}}</li>
                <li> {{$priceplandata['p_poses']}}</li>
                <li> {{$priceplandata['p_Dpic']}}  Pic's Developed</li>
              </ul>
              <a href="/eventDetail/{{$info['id']}}" class="btn">Select</a> </div>
          </div>
        </div>
      </div>
    </section>
    <section class="reviews">
    	<div class="container">
    		<h4><b>Reviews & Ratings</b></h4>
    		<hr>
        
    		<div class="row">
    			<div class="col-sm-8">
            @if($feedback == "")
              <h4>No Rating Available</h4>
            @else
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
    @endif
    <hr>
    			</div>
    		</div>
    	</div>
  </section>

@endsection