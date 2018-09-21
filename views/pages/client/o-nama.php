@extends(default)

<div class="wrapper max-1200 clearfix">
  <ul>
    <li class="clearfix">
      <h2>{{$cf['t1']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t1']->id}}">{{$cf['t1']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t1_p']->id}}">{{$cf['t1_p']->value}}</p>
        <div class="flex-center">
          <img height="380" src="assets/media/mentor1.png" alt="">
        </div>
      </div>
    </li>
    <li class="clearfix">
      <h2>{{$cf['t2']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t2']->id}}">{{$cf['t2']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t2_p']->id}}">{{$cf['t2_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor2.png" alt="">
        </div>
      </div>
    </li>
    <li class="clearfix">
      <h2>{{$cf['t3']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t3']->id}}">{{$cf['t3']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t3_p']->id}}">{{$cf['t3_p']->value}}</p>
        <div class="flex-center">
          <img height="350" src="assets/media/Mentor3.png" alt="">
        </div>
      </div>
    </li>
    <li class="clearfix">
      <h2>{{$cf['t4']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t4']->id}}">{{$cf['t4']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t4_p']->id}}">{{$cf['t4_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor4.png" alt="">
        </div>
      </div>
    </li>
    <li class="clearfix">
      <h2>{{$cf['t5']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t5']->id}}">{{$cf['t5']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t5_p']->id}}">{{$cf['t5_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor5.png" alt="">
        </div>
      </div>
    </li>
    <li class="clearfix">
      <h2>{{$cf['t6']->value}}</h2>
      <div class="content">
        <h3 {{$editable}} data-id="{{$cf['t6']->id}}">{{$cf['t6']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t6_p']->id}}">{{$cf['t6_p']->value}}</p>
        <div class="flex-center">
          <img height="350px" src="assets/media/Mentor6.png" alt="">
        </div>
      </div>
    </li>
  </ul>
  <!-- <div class="tabs">
    <ul>
      <li class="active"><h2 class="light" >{{$cf['t1']->value}}</h2></li>
      <li class="clearfix"><h2 class="light" >{{$cf['t2']->value}}</h2></li>
      <li class="clearfix"><h2 class="light">{{$cf['t3']->value}}</h2></li>
      <li class="clearfix"><h2 class="light" >{{$cf['t4']->value}}</h2></li>
      <li class="clearfix"><h2 class="light" >{{$cf['t5']->value}}</h2></li>
      <li class="clearfix"><h2 class="light" >{{$cf['t6']->value}}</h2></li>
    </ul>
  </div>
  <div class="tabs-content">
    <ul>
      <li class="active">
        <h3 {{$editable}} data-id="{{$cf['t1']->id}}">{{$cf['t1']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t1_p']->id}}">{{$cf['t1_p']->value}}</p>
        <div class="flex-center">
          <img height="380" src="assets/media/mentor1.png" alt="">
        </div>
      </li>
      <li class="clearfix">
        <h3 {{$editable}} data-id="{{$cf['t2']->id}}">{{$cf['t2']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t2_p']->id}}">{{$cf['t2_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor2.png" alt="">
        </div>
      </li>
      <li class="clearfix">
        <h3 {{$editable}} data-id="{{$cf['t3']->id}}">{{$cf['t3']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t3_p']->id}}">{{$cf['t3_p']->value}}</p>
        <div class="flex-center">
          <img height="350" src="assets/media/course-image.jpeg" alt="">
        </div>
      </li>
      <li class="clearfix">
        <h3 {{$editable}} data-id="{{$cf['t4']->id}}">{{$cf['t4']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t4_p']->id}}">{{$cf['t4_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor4.png" alt="">
        </div>
      </li>
      <li class="clearfix">
        <h3 {{$editable}} data-id="{{$cf['t5']->id}}">{{$cf['t5']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t5_p']->id}}">{{$cf['t5_p']->value}}</p>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor5.png" alt="">
        </div>
      </li>
      <li class="clearfix">
        <h3 {{$editable}} data-id="{{$cf['t6']->id}}">{{$cf['t6']->value}}</h3>
        <p {{$editable}} data-id="{{$cf['t6_p']->id}}">{{$cf['t6_p']->value}}</p>
        <div class="flex-center">
          <img height="350px" src="assets/media/Mentor6.png" alt="">
        </div>
      </li>
    </ul>
  </div> -->
</div>
@if(user()->isAdmin)
<div class="max-1200" style="padding: 50px 0;">
  <button id="updateCustomFields" class="btn btn-primary">Sačuvaj</button>
</div>
@endif