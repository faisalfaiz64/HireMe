@extends('layout.layout')

@section('content')


<div class="col-12 col-sm-12 notfSection">

    <b><p class="myTag"><i class="fa fa-bell " aria-hidden="true"></i> Notifications</p></b>
            @foreach ($data as $n)

                    <?php
                            if($n['status']=="unread"){
                            echo'
                            <div class="notfSingle notfSingleNew"><p>NEW !!
                            ';}
                            else 
                            echo'
                            <div class="notfSingle "><p>
                            ';
                    ?>

            <i class="fa fa-bell " aria-hidden="true"></i> {{$n['msg']}}</p>
            </div>
            @endforeach   
            
            <a href="/clearNotf"><button class="my-dbcard-btn ButtonClear">Clear All</button></a>

    </div>
@endsection