<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>HireMe</title>

  <link rel="shortcut icon" href="/webicon.png" type="image/x-icon">
    <link rel="icon" href="/webicon.png" type="image/x-icon">

<!-- FONTS ONLINE -->
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<link href="/css/animate.css" rel="stylesheet" type="text/css">

<!-- -------------FONTAWEOMECDN--------------- -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>

    <script src="/js/jquery-1.11.3.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/own-menu.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/jquery.isotope.min.js"></script> 
<script src="/js/counter.js"></script> 

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/own-menu.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/counter.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
 
<script src="js/main.js"></script>


</head>
<body>

<!-- Page Wrap -->
<div id="wrap" class="no-padding">
  <div id="main-wrapper">
    <header class="main-header">

      <div class="container">
        <div class="logo"> <a href="/"> <img src="/logo.png" alt="Sprint Logo"></a></div>
        <!--  <form class="form-inline ml-auto">
            <div class="md-form my-0">
              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </div>
            <button href="/services" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit">Search</button>
          </form>  -->

        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="/"> HOME</a>
            
            </li>
            <li><a href="/booking"> Hire a Photographer</a>
            
            </li>
            <li><a href="/about">About us</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/works">How it works</li>

            <!-- -------user is loggedined--------- -->

            @if ($user = Session::get('user'))
            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px; margin-top: 5px;"><i class="fa fa-bell-o fa-4x" aria-hidden="true"><span class="badge" style="margin-bottom: 15px; color: white; background-color: #35373e;">0</span></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="/panel">show all</a></li>
                                </ul>
             </li> -->
             <?php  
             if(Session::get('notf')!=0)
                { 
                  echo    '<li><a href="/viewnotf"><div class="fa fa-bell" style="color: #ffa600;"> <span class="qty" style="color: #ffa600;">';
                   echo Session::get('notf') ;
                   
                   
                }
                else echo    '<li><a href="/viewnotf"><div class="fa fa-bell"> <span class="qty">';

            
            ?>
              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px; "><img src="/images/members/{{session::get('img')}}" style="height: 40px; width: 40px; border-radius: 50%; padding: 0px;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/panel">{{session::get('name')}}</a></li>
                                    <li><a href="/messages">messages</a></li>
                                    <li><a href="/logout">logout</a></li>
                                </ul>
             </li>
             @else
             <li>
              <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
             </li>
             <li style="border: 1px solid black; padding: 0px 0px; background-color: #35373e; color: white;">
              <a href="/signups" style="color: white;">Join</a>
             </li>
             @endif
          </ul>
        </nav>
      </div>
    </header>
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
    <!--=======SLIDER =========-->
    <section class="home-slider" style="z-index: -1;">
      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>
            
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src="images/slides/slide-1.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              
            
              <div class="tp-caption sft font-montserrat text-uppercase tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="40" 
                  data-speed="700" 
                  data-start="1000" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"
                  style="color: #fff; font-size: 48px; font-weight:bold; letter-spacing:2px;"> Capture Your Memory </div>
                  <a href="/hire" class="btn  margin-right-10" style="color: white; background-color: black;">Hire a Photographer</a>
              
              
              <div class="tp-caption font-droid-serif sfb text-center text-uppercase tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="-30" 
                  data-speed="700" 
                  data-start="1500" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 12px;  font-weight:bold; letter-spacing:4px;"> Outdoor / Wedding / Branding  </div>
              
            </li>
            
           
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src="images/slides/slide-2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
              
              <!-- Layer -->
              <div class="tp-caption sft font-montserrat uppercase tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="-60" 
                  data-speed="700" 
                  data-start="1000" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"
                  style="color: #fff; font-size: 45px; font-weight:bolder; letter-spacing:2px; text-transform: uppercase;"> Photography is the story </div>
              
           
              <div class="tp-caption sft font-montserrat uppercase tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="0" 
                  data-speed="700" 
                  data-start="1300" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"
                  style="color: #fff; font-size: 45px; font-weight:bolder; letter-spacing:2px; text-transform: uppercase;">fail to put into words.</div>
              
           
              <div class="tp-caption sfb text-center tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="60" 
                  data-speed="700" 
                  data-start="1600" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 14px;  font-weight:100; font-style: italic; letter-spacing:5px;"> Hire Extraordinary & Creative Artists</div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!--======= ABOUT =========-->
    <section class="sectoion-100px about" style="margin-bottom: 0px;">
      <div class="container"> 
        
        <div class="tittle">
          <h4> <strong> About HireMe</strong></h4>
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
      <div class="container">
        <div class="padding-50">
          <h4 class="pull-left text-bold no-margin-b margin-top-20">Do you want to explore all our works? </h4>
          <a href="#." class="btn btn-1 pull-right no-margin-top">view all works</a>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    
    <!--======= start guide =========-->
    <section class="sectoion-100px why-choose">
      <div class="container">
        <div class="sec-choose"> 
          
    
          <div class="choose-tab col-md-5 no-padding">
            <h4 class="padding-left-30 padding-top-30">How to start?</h4>
            <h6 class="padding-left-30 padding-top-20 padding-bottom-20">Our Mission</h6>
            <p class="padding-left-30 padding-right-40">We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events.</p>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#unique" aria-controls="unique" role="tab" data-toggle="tab"> <i class="fa fa-list-ol"></i> Step 01</a></li>
              <li role="presentation"><a href="#elegant" aria-controls="elegant" role="tab" data-toggle="tab"> <i class="fa fa-list-ol"></i> Step 02</a></li>
              <li role="presentation"><a href="#clean" aria-controls="clean" role="tab" data-toggle="tab"><i class="fa fa-list-ol"></i>Step 03</a></li>
              <li role="presentation"><a href="#minimal" aria-controls="minimal" role="tab" data-toggle="tab"><i class="fa fa-list-ol"></i>Step 04</a></li>
            </ul>
          </div>
          
          
          <div class="col-md-7 no-padding"> 
            
            
            <div class="tab-content"> 
              
              
              <div role="tabpanel" class="tab-pane active" id="unique">
                <div class="detail-in"> <img class="img-responsive" src="/picdswedo.jpg" alt="">
                  <div class="text-content col-md-8"> <i class="fa fa-list-ol"></i>
                    <p>Select your destination, photographer, videographer or guide & fill out a short booking form.</p>
                  </div>
                </div>
              </div>
              
              
              <div role="tabpanel" class="tab-pane" id="elegant">
                <div class="detail-in"> <img class="img-responsive" src="/picdswedo.jpg" alt="">
                  <div class="text-content col-md-8"> <i class="fa fa-list-ol"></i>
                    <p>We’ll arrange all the details and connect you with the best HireMe!</p>
                  </div>
                </div>
              </div>
              
             
              <div role="tabpanel" class="tab-pane" id="clean">
                <div class="detail-in"> <img class="img-responsive" src="/picdswedo.jpg" alt="">
                  <div class="text-content col-md-8"> <i class="fa fa-list-ol"></i>
                    <p>Enjoy your awesome photo or video shoot! Or explore the best photo spots and step up your photography skills with our local photo tour guide!</p>
                  </div>
                </div>
              </div>
              
              <!-- Minimal -->
              <div role="tabpanel" class="tab-pane" id="minimal">
                <div class="detail-in"> <img class="img-responsive" src="/picdswedo.jpg" alt="">
                  <div class="text-content col-md-8"> <i class="fa fa-list-ol"></i>
                    <p>Receive edited HD photos in 4 business days or video in 2 weeks after the shoot and share your perfectly captured memories with your family and friends! Or share the pictures you took with your smartphone or camera during the photo tour immediately.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--======= Parallax  =========-->
    <section class="sectoion-100px parallax-bg" style="background: url(images/bg/bg-1.jpg) center center fixed no-repeat;">
      <div class="container">
        <h3>Capture Millions of Meromeries</h3>
        <a href="/hire" class="btn  margin-right-10">Hire a Photographer</a> <a href="works" class="btn btn-1 margin-left-10">How it works</a> </div>
    </section>
    
    <!--======= Our LATEST =========-->
    <section class="sectoion-100px our-blog">
      <div class="container"> 
       
        <div class="tittle">
          <h4><b>Latest from our work</b></h4>
          <p>We are a proud company that want to provide people with this platform through which they can hire photographers and productions houses for their weddings or other events.</p>
        </div>
        
       
        <div class="row"> 
          
          
          <div class="col-md-6">
            <div class="blog-in"> 
              
              
              <div class="blog-up-sec"> <img class="img-responsive" src="/recents/3.jpg" alt=""> 
                
                
                <div class="date-post"> 30 <span> Oct </span> <img src="images/icon-date-post.png" alt=""> </div>
              </div>
              
           
              <span>By Hamza Sajjad</span> <a href="/profile" class="heading"> Shooting the beautiful view of shoting the birds. </a>
              <p> Receive edited HD photos in 4 business days or video in 2 weeks after the shoot and share your perfectly captured memories. </p>
            </div>
          </div>
          
        
          <div class="col-md-6">
            <div class="blog-in"> 
              
              
              <div class="blog-up-sec"> <img class="img-responsive" src="/recents/1.jpg" alt=""> 
                
               
                <div class="date-post"> 25 <span> Oct</span> <img src="images/icon-date-post.png" alt=""> </div>
              </div>
              
              
              <span>By Hamza Saeed</span> <a href="/profile" class="heading"> Click to view my profile for more projects that I've done. </a>
              <p>Receive edited HD photos in 4 business days or video in 2 weeks after the shoot and share your perfectly captured memories. </p>
            </div>
          </div>
        </div>
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
    
    
    
    <!--======= Contact =========-->
    <section class="sectoion-100px contact">
      <div class="container"> 
      
        <div class="tittle">
          <h4><b>Customer Support</b></h4>
          <p>We want best service for our clients. If you face any difficulty or have complaints then do let us know about it. We will try our best to resolve 
          all your issues.</p>
        </div>
        <div class="contact-form"> 
       
          <form role="form" id="contact_form" class="contact-form">
            <div class="row">
              <div class="col-md-12">
                <ul class="row">
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="*NAME">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="*EMAIL">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="company" id="company" placeholder="PHONE">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="website" id="website" placeholder="SUBJECT">
                    </label>
                  </li>
                </ul>
              </div>
              <div class="col-md-12">
                <ul class="row">
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder="*MESSAGE"></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12 no-margin">
                    <button type="submit" value="submit" class="btn" id="btn_submit">send message</button>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>


    <!--======= FOOTER =========-->
    <section class="footer-up">
      <div class="col-sm-6">
        <div class="work"> <i class="ion-map"></i>
          <p>Comsats University Islamabad <br>
            Wah Campus, Wah Cantt</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="contact"> 
          
         
          <ul class="social_icons">
            <li class="facebook"><a class="facebook" href="#."><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a class="twitter" href="#."><i class="fa fa-twitter"></i></a></li>
            <li class="linkedin"><a class="linkedin" href="#."><i class="fa fa-linkedin"></i></a></li>
          </ul>
          <p>Copyright © 2020 - Hamza Sajjad & Hamza Saeed</p>
        </div>
      </div>
    </section>
  </div>
</div>



</body>
</html>