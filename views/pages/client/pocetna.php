@extends(default)

 
 <div class="hero-container">
    <video autoplay controls>
        <source src="assets/media/hero-video.mp4" poster="assets/media/poster.png" type="video/mp4">
          Your browser does not support video tag
    </video>
</div>
<div class="max-1200 clearfix"> 
    <div class="o-nama">
        <ul>
            <li class="clearfix">
            <h2>{{$cf['card_1_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_1_title']->id}}">{{$cf['card_1_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_1_content']->id}}">{{$cf['card_1_content']->value}}</p>
                <div class="flex-center">
                    <img height="350" src="assets/media/Pocetna1.png" alt="">
                </div>
            </div>
            </li>
            <li class="clearfix">
            <h2>{{$cf['card_2_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_2_title']->id}}">{{$cf['card_2_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_2_content']->id}}">{{$cf['card_2_content']->value}}</p>
                <div class="flex-center">
                    <span class="img-info hidden" data-height="380" data-src="Pocetna2.png" data-alt="SEO2"></span>
                    <!-- <img height="380px" src="assets/media/Pocetna2.png" alt=""> -->
                </div>
            </div>
            </li>
            <li class="clearfix">
            <h2>{{$cf['card_3_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_3_title']->id}}">{{$cf['card_3_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_3_content']->id}}">{{$cf['card_3_content']->value}}</p>
                <div class="flex-center">
                    <span class="img-info hidden" data-height="350" data-src="Pocetna3.png" data-alt="SEO3"></span>
                <!-- <img height="350" src="assets/media/Pocetna3.png" alt=""> -->
                </div>
            </div>
            </li>
            <li class="clearfix">
            <h2>{{$cf['card_4_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_4_title']->id}}">{{$cf['card_4_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_4_content']->id}}">{{$cf['card_4_content']->value}}</p>
                <div class="flex-center">
                    <span class="img-info hidden" data-height="380" data-src="Pocetna4.png" data-alt="SEO4"></span>
                <!-- <img height="380px" src="assets/media/Pocetna4.png" alt=""> -->
                </div>
            </div>
            </li>
            <li class="clearfix">
            <h2>{{$cf['card_5_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_5_title']->id}}">{{$cf['card_5_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_5_content']->id}}">{{$cf['card_5_content']->value}}</p>
                <div class="flex-center">
                    <span class="img-info hidden" data-height="380" data-src="Pocetna5.png" data-alt="SEO5"></span>
                <!-- <img height="380px" src="assets/media/Pocetna5.png" alt=""> -->
                </div>
            </div>
            </li>
            <li class="clearfix">
            <h2>{{$cf['card_6_title']->value}}</h2>
            <div class="content">
                <h3 {{$editable}} data-id="{{$cf['card_6_title']->id}}">{{$cf['card_6_title']->value}}</h3>
                <p {{$editable}} data-id="{{$cf['card_6_content']->id}}">{{$cf['card_6_content']->value}}</p>
                <div class="flex-center">
                <span class="img-info hidden" data-height="350" data-src="Pocetna6.png" data-alt="SEO6"></span>
                <!-- <img height="350px" src="assets/media/Pocetna6.png" alt=""> -->
                </div>
            </div>
            </li>
        </ul>
    </div>
</div>

  <section class="course-container max-1200">
    <div class="meow clearfix">
        <div class="left">
            <h1 {{$editable}} data-id="{{$cf['aside_title']->id}}">{{$cf['aside_title']->value}}</h1>
            <p {{$editable}} data-id="{{$cf['aside_description']->id}}">{{$cf['aside_description']->value}}</p>
            <ul>
                <li {{$editable}} data-id="{{$cf['aside_l1']->id}}">{{$cf['aside_l1']->value}}</li>
                <li {{$editable}} data-id="{{$cf['aside_l2']->id}}">{{$cf['aside_l2']->value}}</li>
                <li {{$editable}} data-id="{{$cf['aside_l3']->id}}">{{$cf['aside_l3']->value}}</li>
                <li {{$editable}} data-id="{{$cf['aside_l4']->id}}">{{$cf['aside_l4']->value}}</li>
                <li {{$editable}} data-id="{{$cf['aside_l5']->id}}">{{$cf['aside_l5']->value}}</li>
                <li {{$editable}} data-id="{{$cf['asside_l6']->id}}">{{$cf['asside_l6']->value}}</li>
                <li {{$editable}} data-id="{{$cf['asside_l7']->id}}">{{$cf['asside_l7']->value}}</li>
                <li {{$editable}} data-id="{{$cf['asside_l8']->id}}">{{$cf['asside_l8']->value}}</li>
                <li {{$editable}} data-id="{{$cf['asside_l9']->id}}">{{$cf['asside_l9']->value}}</li>
                <li {{$editable}} data-id="{{$cf['asside_l10']->id}}">{{$cf['asside_l10']->value}}</li>
            </ul>
        </div>
        <div class="right clearfix">
            <div class="image-container">

            </div>
            <a href="seo-kurs" class="btn-info">Poruči SEO Kurs <span class="arrow-right"></span><span class="arrow-right"></span></a>
        </div>
    </div>
      @if(user()->isAdmin)
        <button id="updateCustomFields" class="btn btn-primary" style="margin-bottom:30px;">Sačuvaj</button>
      @endif
  </section>

  <div class="atp max-1200 clearfix">
    <div>
        <p>Pretplatite se, ne propustite obaveštenja!</p>
        <div>
            <form action="/kontakt" method="POST">
                <input type="email" name="from" class="form-control inline" placeholder="E-mail adresa" required>
                <input type="submit" class="btn btn-danger" value="Pretplati se">
                {!! csrfFormField() !!}
                <input type="hidden" name="subject" value="Subscription">
            </form>
        </div>
    </div>
    <div>
        <p>Besplatan sadržaj na društvenim mrežama!</p>
        <p>ZAPRATITE NAS</p>
        <ul class="flex-center social-icons">
            <li>
                <a href="https://www.facebook.com/seokurs.rs/">
                    <span class="facebook-icon"></span>
                    <!-- <img src="assets/media/facebook.png" alt=""> -->
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCSv9YP51Mddth3EOSYckcaQ">
                    <span class="youtube-icon"></span>
                    <!-- <img src="assets/media/youtube.png" alt=""> -->
                </a>
            </li>
            <li>                
                <a href="https://www.instagram.com/seo_kurs/">
                    <span class="instagram-icon"></span>
                    <!-- <img src="assets/media/instagram.png" alt=""> -->
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/nebojsamilicevic/">
                    <span class="linkedin-icon"></span>
                    <!-- <img src="assets/media/linkedin.png" alt=""> -->
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="skype-icon"></span>
                    <!-- <img src="assets/media/skype.png" alt=""> -->
                </a>
            </li>
        </ul>
    </div>
</div>