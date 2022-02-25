@extends('layout.layout')

@section('content')


<section class="sub-banner">
      <div class="container">
        <div class="position-center-center">
          <h2>About us</h2>
          
        </div>
      </div>
    </section>
    
   <!--======= ABOUT =========-->
    <section class="sectoion-100px about" style="margin-bottom: 0px;">
      <div class="container"> 
        
        <div class="tittle">
          <h4> <strong>HireMe</strong></h4>
          <p>We are so excited to capture your upcoming trip memories! A fun, friendly local photographer excited to capture your vacation memories. Shoots are usually one hour, but you have a choice of package lengths.</p>
        </div>
        <ul class="row">
          <li class="col-sm-4"> <img class="img-responsive" src="images/about-img-1.jpg" alt="" >
            <h6 class="margin-top-20">Who we are</h6>
            <p>We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events. </p>
          </li>
          <li class="col-sm-4"> <img class="img-responsive" src="images/about-img-2.jpg" alt="" >
            <h6 class="margin-top-20">our mission</h6>
            <p>We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events. </p>
          </li>
          <li class="col-sm-4"> <img class="img-responsive" src="images/about-img-3.jpg" alt="" >
            <h6 class="margin-top-20">our vision</h6>
            <p>We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events. 
        </ul>
      </div>
    </section>


    <!--======= Parallax Section =========-->
    <section class="sectoion-150px parallax-bg" style="background: url(images/bg/bg-2.jpg) center center fixed no-repeat;">
      <div class="container">
        <h4>see how we work to create everything unique</h4>
        <a href="#." class="play-btn"><i class="ion-play"></i> </a> </div>
    </section>

    <!--======= Top Profiles =========-->
    <section class="team sectoion-100px">
      <div class="container">
        
        <div class="tittle">
          <h4><b>Top Rated Photographer</b></h4>
          <p>Here are some of our top rated photographers that had provided excellent services to the clients.</p>
        </div>
        
     
        <ul class="row">
          
        
          <li class="col-md-4">
            <article> <img class="img-responsive" src="/avatar1.jpg" alt="">
              <div class="team-name">
                <a href="/profile"><h6><b>Hasham Rehmat</b></h6></a>
                <span>Photographer</span> </div>
            </article>
          </li>
          
          <!-- Team -->
          <li class="col-md-4">
            <article> <img class="img-responsive" src="/avatar2.jpg" alt="">
              <div class="team-name">
                <a href="/profile"><h6><b>RIA Photographers</b></h6></a>
                <span>Production House </span> </div>
            </article>
          </li>
          
          <!-- Team -->
          <li class="col-md-4">
            <article> <img class="img-responsive" src="/avatar3.jpg" alt="">
              <div class="team-name">
                <a href="/profile"><h6><b>Maha Productions</b></h6></a>
                <span>Production House</span> </div>
            </article>
          </li>
        </ul>
      </div>
    </section>

 


@endsection