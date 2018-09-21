@extends(default)

<div class="wrapper max-1200 clearfix">
  <div class="tabs">
    <ul>
      <li class="active"><h2 class="light" >{{$cf['t1']->value}}</h2></li>
      <li><h2 class="light" >{{$cf['t2']->value}}</h2></li>
      <li><h2 class="light">{{$cf['t3']->value}}</h2></li>
      <li><h2 class="light" >{{$cf['t4']->value}}</h2></li>
      <li><h2 class="light" >{{$cf['t5']->value}}</h2></li>
      <li><h2 class="light" >{{$cf['t6']->value}}</h2></li>
    </ul>
  </div>
  <div class="tabs-content">
    <ul>
      <li class="active">
        <h3 {{$editable}} data-id="{{$cf['t1']->id}}">{{$cf['t1']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t1_p']->id}}">{{$cf['t1_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="380" src="assets/media/mentor1.png" alt="">
=======
          <img style="" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
      <li>
        <h3 {{$editable}} data-id="{{$cf['t2']->id}}">{{$cf['t2']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t2_p']->id}}">{{$cf['t2_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="380px" src="assets/media/Mentor2.png" alt="">
=======
          <img height="600" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
      <li>
        <h3 {{$editable}} data-id="{{$cf['t3']->id}}">{{$cf['t3']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t3_p']->id}}">{{$cf['t3_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="350px" src="assets/media/Mentor3.png" alt="">
=======
          <img height="600" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
      <li>
        <h3 {{$editable}} data-id="{{$cf['t4']->id}}">{{$cf['t4']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t4_p']->id}}">{{$cf['t4_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="380px" src="assets/media/Mentor4.png" alt="">
=======
          <img height="600" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
      <li>
        <h3 {{$editable}} data-id="{{$cf['t5']->id}}">{{$cf['t5']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t5_p']->id}}">{{$cf['t5_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="380px" src="assets/media/Mentor5.png" alt="">
=======
          <img height="600" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
      <li>
        <h3 {{$editable}} data-id="{{$cf['t6']->id}}">{{$cf['t6']->value}}</h3>
        <div {{$editable}} data-id="{{$cf['t6_p']->id}}">{{$cf['t6_p']->value}}</div>
        <div class="flex-center">
<<<<<<< HEAD
          <img height="350px" src="assets/media/Mentor6.png" alt="">
=======
          <img height="600" src="assets/media/course-image.jpeg" alt="">
>>>>>>> 836e9c93633212d37e6b27057c2e8b33d3b316dd
        </div>
      </li>
    </ul>
  </div>
</div>
@if(user()->isAdmin)
<div class="max-1200" style="padding: 50px 0;">
  <button id="updateCustomFields" class="btn btn-primary">Sačuvaj</button>
</div>
@endif