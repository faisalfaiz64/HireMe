@extends('layout.layout')

@section('content')



    <section class="sub-banner">
      <div class="container">
        <div class="position-center-center">
          <h2>our services</h2>
        </div>
      </div>
    </section>
    
    <!--======= SERVICE SECTION =========-->
    <section class="sectoion-100px services">
      <div class="container"> 
        <!-- Tittle -->
        <div class="tittle">
          <h4>Popular professional services</h4>
        </div>
        
        <!-- Service Row -->
        <ul class="row">
          
          <!-- Service -->
          <li class="col-md-4">
            <div class="ser-in margin-bottom-30">
              <div class="icon"> <img src="/pg-icons/camera512px.png" alt=""> </div>
              <h5>Photography/Videography</h5>
              <hr>
              
            </div>
          </li>
          
          <!-- Service -->
          <li class="col-md-4">
            <div class="ser-in margin-bottom-30">
              <div class="icon"> <img src="/pg-icons/dslr back512px.png" alt=""> </div>
              <h5>Drone Video/Photos</h5>
              <hr>
              
            </div>
          </li>
          
          <!-- Service -->
          <li class="col-md-4 margin-bottom-30">
            <div class="ser-in">
              <div class="icon"> <img src="/pg-icons/equipment512px.png" alt=""> </div>
              <h5>Full Wedding Events</h5>
              <hr>
              
            </div>
          </li>
          
          <!-- Service -->
          <li class="col-md-4">
            <div class="ser-in margin-bottom-30">
              <div class="icon"> <img src="/pg-icons/smile detection512px.png" alt=""> </div>
              <h5>Full Fashion Events</h5>
              <hr>
              
            </div>
          </li>
          
          <!-- Service -->
          <li class="col-md-4">
            <div class="ser-in margin-bottom-30">
              <div class="icon"> <img src="/pg-icons/focus512px.png" alt=""> </div>
              <h5>Travel Photography</h5>
              <hr>
             
            </div>
          </li>
          
          <!-- Service -->
          <li class="col-md-4 margin-bottom-30">
            <div class="ser-in">
              <div class="icon"> <img src="/pg-icons/editing512px.png" alt=""> </div>
              <h5>Corporate Events</h5>
              <hr>
              
            </div>
          </li>
        </ul>
      </div>
    </section>
    
        <!--======= RECENT WORKS =========-->
    <section class="sectoion-100px no-padding-b portfolio padding-left-50 padding-right-50">
      <div class="container" style="padding: 0px; margin-top: -100px;"> 
      
        <div class="tittle">
          <h4><b>Recent works</b></h4>
          <p>We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events. </p>
        </div>
      </div>
      <div class="container-fluid">
        <ul class="port-folio-row no-margin-t folio-simple row col-4">
          
        
          <li class="item">
            <article> <img src="/recents/1.jpg" alt=""> 
             
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
          
          <li class="item">
            <article> <img src="/recents/2.jpg" alt="">  
              
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
         
          <li class="item">
            <article> <img src="/recents/3.jpg" alt=""> 
           
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
          
          <li class="item">
            <article> <img src="/recents/4.jpg" alt=""> 
              
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
    
          <li class="item int arch">
            <article> <img src="/recents/5.jpg" alt=""> 
              
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
          
          <li class="item">
            <article> <img src="/recents/1.jpg" alt=""> 
            
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
        
          <li class="item">
            <article> <img src="/recents/2.jpg" alt=""> 
              <!-- Hover Info -->
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
          
         
          <li class="item">
            <article> <img src="/recents/5.jpg" alt=""> 
              <!-- Hover Info -->
              <div class="hover-port">
                <div class="position-center-center"> <a href="#."><i class="fa fa-eye"></i></a>
                  <h6>view more</h6>
                </div>
              </div>
            </article>
          </li>
        </ul>
      </div>
      <br>
      <div class="container">
        <div class="padding-50">
          <h4 class="pull-left text-bold no-margin-b margin-top-20">Do you want to explore all our works? </h4>
          <a href="#." class="btn btn-1 pull-right no-margin-top">view all works</a>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <br><br>
 
      <!--======= Profiles =========-->
      <!--======= Bs Ek hi profile ko dynamic kro aur foreach laga do =========-->
      <section class="profile-ser">
        <div class="container">
          <h3 style="text-transform: none; font-weight: bold; text-align: center;">Our Skilled Photographers</h3>
          <hr style="width: 100%;">
          <div class="profile-box">
            <div class="pro-main">
            <ul class="pro-li">
              <li>
                <div class="pro-img">
              <img src="/avatar1.jpg" alt="img">
            </div>
              </li>
            <li>
              <div class="pro-sec-com">
              <h4>Hasham Rehmat</h4>
              <p>Photographer</p>
              <div class="ratings-pro">
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x"></span>
              </div>
              <div class="pro-desc">
                <p>Hello! My name is Hasham and I will edit that and blah blah and I will edit that and blah blah</p>
              </div>

              <div class="pro-loc">
                <i class="fa fa-map-marker fa-1.8x"></i> <span>Wah Cantt</span>
              </div>
            </div>
            </li>
            <li>
              <a href="/profile" class="btn btn-1 pull-right no-margin-top">Visit Profile</a>
            </li>
              
            </ul>
          </div>
          </div>

            <hr style="width: 100%;">

            <!--======= yahan pr foreach khtm krna =========-->

          <div class="profile-box">
            <div class="pro-main">
            <ul class="pro-li">
              <li>
                <div class="pro-img">
              <img src="/avatar1.jpg" alt="img">
            </div>
              </li>
            <li>
              <div class="pro-sec-com">
              <h4>Hasham Rehmat</h4>
              <p>Photographer</p>
              <div class="ratings-pro">
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x"></span>
              </div>
              <div class="pro-desc">
                <p>Hello! My name is Hasham and I will edit that and blah blah and I will edit that and blah blah</p>
              </div>

              <div class="pro-loc">
                <i class="fa fa-map-marker fa-1.8x"></i> <span>Wah Cantt</span>
              </div>
            </div>
            </li>
            <li>
              <a href="/profile" class="btn btn-1 pull-right no-margin-top">Visit Profile</a>
            </li>
              
            </ul>
          </div>
          </div>         

          <hr style="width: 100%;">


        </div>
      </section>


    
 <!--======= Tastimonial =========-->
    <section class="tastimonial tastimonial-bg padding-bottom-100">
      <div class="container"> 
        
       
        <div class="testi-slides"> 
          
          
          <div class="testi">
            <div class="avatar"> <img src="/avatar1.jpg" style="height: 110px;"></div>
            <h6>Hasham Rehmat </h6>
            <span>Islamabad, Pakistan </span>
            <p>We had the best time taking photos! Hasham was able to get us laughing and having fun the entire time! Our happiness was definitely translated into the final product. I would highly recommend Hireme. </p>
          </div>
          
         
          <div class="testi">
            <div class="avatar"> <img src="images/avatar-1.png" style="height: 110px;"></div>
            <h6>Hamza Sajjad </h6>
            <span>Rawalpindi, Pakistan </span>
            <p>Hamza Sajjad was so great to work with! We have two young kiddos that don't easily cooperate for photos, but he was able to get some great shots. We were really happy with the results.</p>
          </div>
          
          
          <div class="testi">
            <div class="avatar"> <img src="/avatar1.jpg" style="height: 110px;"></div>
            <h6>Hamza Saeed </h6>
            <span>Wah Cantt, Pakistan </span>
            <p>We just got married in Wah Cantt. We chose Hamza Saeed to be our photographer and he was amazing! He was incredibly helpful and made the whole experience and enjoyable one!
            I would highly recommend Hireme to anyone looking to commemorate ANY occasion!</p>
          </div>
        </div>
      </div>
    </section>
    
  


@endsection