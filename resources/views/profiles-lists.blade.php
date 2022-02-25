
@extends('layout.layout')

@section('content')




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





@endsection