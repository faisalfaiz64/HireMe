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
<link href="/css/addplans.css" rel="stylesheet" type="text/css">
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px; "><img src="/images/members/{{session::get('img')}}" style="height: 40px; width: 40px; border-radius: 50%; padding: 0px;"><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/panel">{{session::get('name')}}</a></li>
                  <li><a href="/logout">logout</a></li>
                </ul>
             </li>
            @else
            <li>
              <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
            </li>
            <li style="border: 1px solid black; padding: 0px 0px; background-color: #35373e; color: white;">  <a href="/signups" style="color: white;">Join</a>
            </li>
            @endif
          </ul>
        </nav>
      </div>
    </header>
  
   


    @yield('content')

        <!--======= FOOTER =========-->
    <section class="sectoion-100px promo">
      <div class="container">
        <div class="position-center-center">
          <h5>Do you want to discuss anything with us?</h5>
          <a href="/customersupport" class="btn">CONTACT US</a> </div>
      </div>
    </section>
    
    
    <section class="footer-up">
      <div class="col-sm-6">
        <div class="work"> <i class="ion-map"></i>
          <p>Comsats UNiversity Islamabad <br>
            WAH CAMPUS</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="contact"> 
          
          
          <ul class="social_icons">
            <li class="facebook"><a class="facebook" href="#."><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a class="twitter" href="#."><i class="fa fa-twitter"></i></a></li>
            <li class="linkedin"><a class="linkedin" href="#."><i class="fa fa-linkedin"></i></a></li>
          </ul>
          <p>Copyright © 2020 - FYP By Hamza Sajjad & Hamza Saeed</p>
        </div>
      </div>
    </section>
  </div>
</div>

</body>
</html>