@extends('layout.layout')

@section('content')



<section class="pricing sectoion-100px" style="margin-top: -100px;">
      <div class="container"> 
       
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
        <div class="tittle">
          <h4>{{$info->name}}'s Pricing Plans</h4>
          <h5><a><button class="btn"  data-toggle="modal" data-target="#Addplan" role='button' type="button" onclick="show();"> Add Plans </button> </a></h5>
        </div>
        
        <form method="POST" action="/SavePlans/{{$info->id}}" enctype="multipart/form-data" class="signup-form">
      {{ csrf_field() }}
        <div class="row" id="pricedisplay"> 
          
      
          <div class="col-md-4">
            <div class="planselect">
              <h5><i class="icon"><img src="images/icon-7.png"></i>Basic</h5>
              <div class="price" style="font-size: 14px;"> <span class="huge-text"><b>Rs. </b><input type="number" name="basic_price" placeholder="Price" style="width: 100px; text-align: center;"></span> <span class="month">PER HOUR</span> </div>
              <ul>
                <div class="inst">
                <li>  <input type="text" name="basic_title" placeholder="Enter Service Title"></li>
                <li>  <input type="number" name="basic_pic" placeholder="Enter Total Pictures"></li>
                <li>  <input type="number" name="basic_workhour" placeholder="Enter Work Hours"></li>
                </div>
                
                <div class="chkboxs">
                  <li> <input type="checkbox" name="basic_location"> Desired Location</li>
                <li> <input type="checkbox" name="basic_poses"> Different Poses</li>
                <li> <input type="checkbox" name="basic_edit"> Edits also included</li>
                <li> <input type="checkbox" name="basic_Sfile"> Source File</li>
                </div>
                
                <div class="inst">
                  <li>  <input type="number" name="basic_Dpic" placeholder="Developed Pictures"></li>
                </div>
                  <div class="sltc">
                <li>Completed Within: 
                  <select name="basic_completeIn" id="basic_completeIn" style="padding: 10px; margin-top: 15px;">
                  <option value="B_1d">01 Day</option>
                  <option value="B_2d">02 Day</option>
                  <option value="B_3d">03 Day</option>
                  <option value="B_4d">04 Day</option>
                  <option value="B_5d">05 Day</option>
                  <option value="B_6d">06 Day</option>
                  <option value="B_7d">07 Day</option>
                  <option value="B_2w">02 weeks</option>
                  <option value="B_3w">03 weeks</option>
                  <option value="B_1m">1 Month</option>
                </select>

              </li>
              </div>

              </ul>
               </div>
          </div>
          
          <!-- Plan  -->
          <div class="col-md-4">
            <div class="planselect">
              <h5> <i class="icon"><img src="images/icon-8.png"></i>Standard</h5>
              <div class="price" style="font-size: 14px;"> <span class="huge-text"><b>Rs. </b><input type="number" name="stand_price" placeholder="Price" style="width: 100px; text-align: center;"></span> <span class="month">PER HOUR</span> </div>
              <ul>
                <div class="inst">
                <li>  <input type="text" name="stand_title" placeholder="Enter Service Title"></li>
                <li>  <input type="number" name="stand_pic" placeholder="Enter Total Pictures"></li>
                <li>  <input type="number" name="stand_Workhore" placeholder="Enter Work Hours"></li>
                </div>
                
                <div class="chkboxs">
                  <li> <input type="checkbox" name="stand_location"> Desired Location</li>
                <li> <input type="checkbox" name="stand_poses"> Different Poses</li>
                <li> <input type="checkbox" name="stand_edit"> Edits also included</li>
                <li> <input type="checkbox" name="stand_Sfile"> Source File</li>
                </div>
                
                <div class="inst">
                  <li>  <input type="number" name="stand_Dpic" placeholder="Developed Pictures"></li>
                </div>
                  <div class="sltc">
                <li>Completed Within: 
                  <select name="stand_completeIn" id="stand_completeIn" style="padding: 10px; margin-top: 15px;">
                  <option value="S_1d">01 Day</option>
                  <option value="S_2d">02 Day</option>
                  <option value="S_3d">03 Day</option>
                  <option value="S_4d">04 Day</option>
                  <option value="S_5d">05 Day</option>
                  <option value="S_6d">06 Day</option>
                  <option value="S_7d">07 Day</option>
                  <option value="S_2w">02 weeks</option>
                  <option value="S_3w">03 weeks</option>
                  <option value="S_1m">1 Month</option>
                </select>

              </li>
              </div>

              </ul>
               </div>
          </div>
          
          <!-- Plan  -->
          <div class="col-md-4">
            <div class="planselect">
              <h5> <i class="icon"><img src="images/icon-9.png"></i>Premium</h5>
              <div class="price" style="font-size: 14px;"> <span class="huge-text"><b>Rs. </b><input type="number" name="p_price" placeholder="Price" style="width: 100px; text-align: center;"></span> <span class="month">PER HOUR</span> </div>
               <ul>
                <div class="inst">
                <li>  <input type="text" name="p_title" placeholder="Enter Service Title"></li>
                <li>  <input type="number" name="p_pic" placeholder="Enter Total Pictures"></li>
                <li>  <input type="number" name="p_workhour" placeholder="Enter Work Hours"></li>
                </div>
                
                <div class="chkboxs">
                  <li> <input type="checkbox" name="p_location"> Desired Location</li>
                <li> <input type="checkbox" name="p_poses"> Different Poses</li>
                <li> <input type="checkbox" name="p_edit"> Edits also included</li>
                <li> <input type="checkbox" name="p_Sfile"> Source File</li>
                </div>
                
                <div class="inst">
                  <li>  <input type="number" name="p_Dpic" placeholder="Developed Pictures"></li>
                </div>
                  <div class="sltc">
                <li>Completed Within: 
                  <select name="p_completeIn" id="p_completeIn" style="padding: 10px; margin-top: 15px;">
                  <option value="P_1d">01 Day</option>
                  <option value="P_2d">02 Day</option>
                  <option value="P_3d">03 Day</option>
                  <option value="P_4d">04 Day</option>
                  <option value="P_5d">05 Day</option>
                  <option value="P_6d">06 Day</option>
                  <option value="P_7d">07 Day</option>
                  <option value="P_2w">02 weeks</option>
                  <option value="P_3w">03 weeks</option>
                  <option value="P_1m">1 Month</option>
                </select>

              </li>
              </div>

              </ul>
              </div>
          </div>
          <center><h5><a><button class="btn"  data-toggle="modal" data-target="#Addplan" role='button' type="submit"> Submit </button> </a></h5></center>
          
        </div>
         
       </form>
      </div>
    </section>

<script>
function show() {
  var x = document.getElementById("pricedisplay");
 
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

    @endsection