
@extends('layout.layout')

@section('content')




<section class="profile-ser">
        <div class="container">
        	@if(session()->has('message'))
    		<div class="alert alert-success">
			{{ session()->get('message') }}
       		 
    		</div>

		@endif
          <h3 style="text-transform: none; font-weight: bold; text-align: center;">Search Results for "{{$extra['kw']}}"</h3>
          <hr style="width: 100%;">

          @if($data != "")
          @foreach($data as $datas)
          @foreach($datas as $row)
          <div class="profile-box">
            <div class="pro-main">
            <ul class="pro-li">
              <li>
                <div class="pro-img">
              <img src="/images/members/{{$row['img']}}" alt="img">
            </div>
              </li>
            <li>
              <div class="pro-sec-com">
              <h4>{{$row['name']}}</h4>
              <p>{{$row['role']}}</p>
              <div class="ratings-pro">
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x checked"></span>
                  <span class="fa fa-star fa-2x"></span>
              </div>
              <div class="pro-desc">
                <p>{{$row['description']}}</p>
              </div>

              <div class="pro-loc">
                <i class="fa fa-map-marker fa-1.8x"></i> <span>{{$row['city']}}</span>
              </div>
            </div>
            </li>
            <li>
            	<form action="/ShowProfile/{{$row['id']}}">
              <button type="submit" class="btn btn-1 pull-right no-margin-top">Visit Profile</button>
              </form>
            </li>
              <li>
              <form action="/eventDetail/{{$row['id']}}">
              <button type="submit" class="btn btn-1 pull-right no-margin-top" style="background-color: #f44336;">Hire Me</button>
              </form>
            </li>
            </ul>
          </div>
          </div>

            <hr style="width: 100%;">
            @endforeach
            @endforeach
            @endif
            <h3 class="mymsg">{{$extra['msg']}}</h3>
        </div>
      </section>





@endsection