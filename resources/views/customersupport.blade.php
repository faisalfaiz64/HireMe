@extends('layout.layout')

@section('content')



    <section class="sub-banner">
      <div class="container">
        <div class="position-center-center">
          <h2>Customer Support</h2>
        </div>
      </div>
    </section>
    
    
    <section class="sectoion-100px contact contact-page">
      <div class="container"> 
      
        <div class="tittle">
          <h4>contact us</h4>
          <p>We want best service for our clients. If you face any difficulty or have complaints then do let us know about it. We will try our best to resolve 
          all your issues.</p>

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
        </div>
        <div class="row"> 
          
        
          <div class="col-sm-4">
            <div class="contct-info">
              <h5>Get in touch</h5>
              <ul>
                
                
            
               
                
                <!-- e-mail -->
                <li class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="fa fa-envelope-o"></i> </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading">e-mail</h6>
                    <p>info@hireme.com </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="contact-form"> 
              <!--======= FORM  =========-->
              <form role="form" id="contact_form" class="contact-form" method="post" action="/support" enctype="multipart/form-data">
                {{ csrf_field() }}
                <ul class="row">
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="*NAME">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="email" class="form-control" pattern=".+@gmail.com" minlength="3" maxLength="30" name="email" id="email" placeholder="*EMAIL">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="tel" pattern="[0-9]{11}" class="form-control" name="phoneNO" id="company" placeholder="PHONE">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="subject" id="website" placeholder="SUBJECT">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder="*MESSAGE"></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12 no-margin">
                    <button type="submit" value="submit" class="btn" id="btn_submit">send message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection