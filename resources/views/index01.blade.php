@extends('layout.layout')

@section('content')

<!-- 

<section class="banner--section">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/slider/slider-bg-01.jpg" alt="First slide">
        <div class="carousel-caption">
                        
                <div class="banner--title ff--primary">
                    <h2 class="h2 text-primary">Capture Your Mind</h2>
                </div>

               <div class="banner--subtitle">
                    <h3 class="h4 text-white">Professional Photographer</h3>
               </div>

                <div class="banner--desc">
                    <p>Hello we proviode professiona services to our clients</p>
                </div>

                <div class="banner--action mt--30">
                    <a href="#" class="btn btn-default">Start A Project</a>
                </div>
                        
         </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/slider/slider-bg-02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/slider/slider-bg-03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section> -->



  <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="First slide" class="d-block w-100" src="/slider/slider-bg-01.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated slideInDown" style="animation-delay: 1s">Capture Your Mind</h5>
                    <p class="animated fadeInUp" style="animation-delay: 2s">Creating a timeless look, coupled with a flawless moment. Creating a timeless look, coupled with a flawless moment.</p>
                            <center>
                                <div class="input-group md-form form-sm form-2 pl-0 animated zoomIn searchdiv" style="animation-delay: 2s; width: 40%;">
                                        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search Desinations" aria-label="Search">
                                    <div class="input-group-append">
                                     <span class="input-group-text amber lighten-3" id="basic-text1">
                                        <i class="fas fa-search text-grey"aria-hidden="true"></i>
                                     </span>
                                    </div>
                                </div>
                            </center>
                        
                    
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Second slide" class="d-block w-100" src="/slider/slider-bg-02.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated slideInDown" style="animation-delay: 1s">Capture Your Mind</h5>
                    <p class="animated fadeInUp" style="animation-delay: 2s">Creating a timeless look, coupled with a flawless moment. Creating a timeless look, coupled with a flawless moment.</p>

                    <center>
                                <div class="input-group md-form form-sm form-2 pl-0 animated zoomIn searchdiv" style="animation-delay: 2s; width: 40%;">
                                        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search Desinations" aria-label="Search">
                                    <div class="input-group-append">
                                     <span class="input-group-text amber lighten-3" id="basic-text1">
                                        <i class="fas fa-search text-grey searchicon"aria-hidden="true"></i>
                                     </span>
                                    </div>
                                </div>
                            </center>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Third slide" class="d-block w-100" src="/slider/slider-bg-03.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated zoomIn" style="animation-delay: 1s">Capture Your Mind</h5>
                    <p class="animated fadeInLeft" style="animation-delay: 2s">Creating a timeless look, coupled with a flawless moment. Creating a timeless look, coupled with a flawless moment.</p>
                    <center>
                                <div class="input-group md-form form-sm form-2 pl-0 animated zoomIn searchdiv" style="animation-delay: 2s; width: 40%;">
                                        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search Desinations" aria-label="Search">
                                    <div class="input-group-append">
                                     <span class="input-group-text amber lighten-3" id="basic-text1">
                                        <i class="fas fa-search text-grey"aria-hidden="true"></i>
                                     </span>
                                    </div>
                                </div>
                            </center>
                </div>
            </div>
        </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
    </div>

<br><br>
    <div class="container">
        <div class="infosec">
        
        <center><h3 style="color: #383838;">This is What You'll Get with Every Booking</h3></center>  <br>
        
        <div class="row infoboxsfull justify-content-between">

        <div class="infoboxs">

            <div class="imgbox">
            <center><img src="/icons index/1.png"></center>
            </div>

            <div class="parainfo"></div>
            <p>Individual Approach</p>
            </div>
        <div class="infoboxs">
            <div class="imgbox">
            <center><img src="/icons index/2.png"></center>
            </div>
            <div class="parainfo">
                <p>Handpicked Local Professional</p>
            </div>
            
            </div>
        <div class="infoboxs">
            <div class="imgbox">
             <center><img src="/icons index/3.png"></center>
            </div>
            <div class="parainfo">
                <p>Special Requests Option</p>
            </div>
            
            </div>
        <div class="infoboxs">
            <div class="imgbox">
             <center><img src="/icons index/4.png"></center>
            </div>
            <div class="parainfo">
                <p>Top Shoot Spot Recommendations</p>
            </div>
            
            </div>
        <div class="infoboxs">
            <div class="imgbox">
             <center><img src="/icons index/5.png"></center>
            </div>
            <div class="parainfo">
                <p>100% Money Back Satisfaction Guarantee</p>
            </div>
            
            </div>
        <div class="infoboxs">
            <div class="imgbox">
             <center><img src="/icons index/6.png"></center>
            </div>
            <div class="parainfo">
                <p>Private Session</p>
            </div>
            
            </div>
                
         </div>
         </div>
         <hr>
         <h3>Popular professional services</h3>




<section id="services" class="section pt--70 pb--80" data-bg-img="img/services-img/bg.jpg" data-overlay="0.55">
           
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center lines--white">
                    <h2 class="h1 ff--primary text-primary">What I Do</h2>
                </div>
                <!-- Section Title End -->

                <!-- Service Items Start -->
                <div class="service--items owl-carousel" data-owl-nav="true" data-owl-responsive='{"0": {"items": 1}, "551": {"items": 2}, "992": {"items": 3}, "1200": {"items": 4}}'>
                    <!-- Service Item Start -->
                    <div class="service--item">
                        <div class="icon fs--22 text-black">
                            <i class="fa fa-camera"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h5">Fashion Photography</h3>
                        </div>

                        <div class="desc fs--16">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit harum nam ipsam consequatur sunt qui excepturi.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service--item">
                        <div class="icon fs--22 text-black">
                            <i class="fa fa-tv"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h5">Digital Photography</h3>
                        </div>

                        <div class="desc fs--16">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit harum nam ipsam consequatur sunt qui excepturi.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service--item">
                        <div class="icon fs--22 text-black">
                            <i class="fa fa-camera-retro"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h5">Product Photography</h3>
                        </div>

                        <div class="desc fs--16">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit harum nam ipsam consequatur sunt qui excepturi.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service--item">
                        <div class="icon fs--22 text-black">
                            <i class="fa fa-film"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h5">Flim Photography</h3>
                        </div>

                        <div class="desc fs--16">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit harum nam ipsam consequatur sunt qui excepturi.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service--item">
                        <div class="icon fs--22 text-black">
                            <i class="fa fa-user-o"></i>
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h5">Model Photography</h3>
                        </div>

                        <div class="desc fs--16">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit harum nam ipsam consequatur sunt qui excepturi.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <!-- Service Items End -->
            
        </section>


<script type="text/javascript">
      var $f0f = $('.f0f--section');

        if ( $f0f.length ) {
            $f0f.css('min-height', function () {
                return $(this).find('.f0f--content').outerHeight(true);
            });
        }

</script>














    </div>





@endsection