<?php //This view extends default layout ?>

 
 <div class="hero-container">
  <video autoplay controls>
      <source src="assets/media/hero-video.mp4" type="video/mp4">
          Your browser does not support video tag
      </video>
  </div>
  <div class="max-1200 clearfix"> 
        <div class="o-nama clearfix">
            <div class="tabs">
            <ul>
                <li class="active"><h2 class="light"><?php echo htmlspecialchars($cf['card_1_title']->value); ?></h2></li>
                <li><h2 class="light"><?php echo htmlspecialchars($cf['card_2_title']->value); ?></h2></li>
                <li><h2 class="light"><?php echo htmlspecialchars($cf['card_3_title']->value); ?></h2></li>
                <li><h2 class="light"><?php echo htmlspecialchars($cf['card_4_title']->value); ?></h2></li>
                <li><h2 class="light"><?php echo htmlspecialchars($cf['card_5_title']->value); ?></h2></li>
                <li><h2 class="light"><?php echo htmlspecialchars($cf['card_6_title']->value); ?></h2></li>
            </ul>
            </div>
            <div class="tabs-content">
                <ul>
                    <li class="active">
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_1_title']->id); ?>"><?php echo htmlspecialchars($cf['card_1_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_1_content']->id); ?>"><?php echo htmlspecialchars($cf['card_1_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="380px" src="assets/media/Pocetna1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_2_title']->id); ?>"><?php echo htmlspecialchars($cf['card_2_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_2_content']->id); ?>"><?php echo htmlspecialchars($cf['card_2_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="380px" src="assets/media/Pocetna2.png" alt="">
                        </div>                   
                    </li>
                    <li>                       
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_3_title']->id); ?>"><?php echo htmlspecialchars($cf['card_3_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_3_content']->id); ?>"><?php echo htmlspecialchars($cf['card_3_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="380px" src="assets/media/Pocetna3.png" alt="">
                        </div>
                    </li>
                    <li>
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_4_title']->id); ?>"><?php echo htmlspecialchars($cf['card_4_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_4_content']->id); ?>"><?php echo htmlspecialchars($cf['card_4_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="380px" src="assets/media/Pocetna4.png" alt="">
                        </div>
                    </li>
                    <li>
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_5_title']->id); ?>"><?php echo htmlspecialchars($cf['card_5_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_5_content']->id); ?>"><?php echo htmlspecialchars($cf['card_5_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="380px" src="assets/media/Pocetna5.png" alt="">
                        </div>
                    </li>
                    <li>
                        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_6_title']->id); ?>"><?php echo htmlspecialchars($cf['card_6_title']->value); ?></h3>
                        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['card_6_content']->id); ?>"><?php echo htmlspecialchars($cf['card_6_content']->value); ?></div>
                        <div class="flex-center">
                            <img height="320px" src="assets/media/Pocetna6.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  <section class="course-container max-1200">
    <div class="meow clearfix">
        <div class="left">
            <h1 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_title']->id); ?>"><?php echo htmlspecialchars($cf['aside_title']->value); ?></h1>
            <p <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_description']->id); ?>"><?php echo htmlspecialchars($cf['aside_description']->value); ?></p>
            <ul>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_l1']->id); ?>"><?php echo htmlspecialchars($cf['aside_l1']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_l2']->id); ?>"><?php echo htmlspecialchars($cf['aside_l2']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_l3']->id); ?>"><?php echo htmlspecialchars($cf['aside_l3']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_l4']->id); ?>"><?php echo htmlspecialchars($cf['aside_l4']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['aside_l5']->id); ?>"><?php echo htmlspecialchars($cf['aside_l5']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['asside_l6']->id); ?>"><?php echo htmlspecialchars($cf['asside_l6']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['asside_l7']->id); ?>"><?php echo htmlspecialchars($cf['asside_l7']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['asside_l8']->id); ?>"><?php echo htmlspecialchars($cf['asside_l8']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['asside_l9']->id); ?>"><?php echo htmlspecialchars($cf['asside_l9']->value); ?></li>
                <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['asside_l10']->id); ?>"><?php echo htmlspecialchars($cf['asside_l10']->value); ?></li>
            </ul>
        </div>
        <div class="right clearfix">
            <div class="image-container">

            </div>
            <a href="seo-kurs" class="btn-info">Poruči SEO Kurs <span class="arrow-right"></span><span class="arrow-right"></span></a>
        </div>
    </div>
      <?php if(user()->isAdmin): ?>
        <button id="updateCustomFields" class="btn btn-primary" style="margin-bottom:30px;">Sačuvaj</button>
      <?php endif; ?>
  </section>

  <div class="atp max-1200 clearfix">
    <div>
        <p>Pretplatite se na naše novine!</p>
        <div>
            <input type="email" id="subscriber" class="form-control inline" placeholder="e-mail adresa">
            <input type="button" class="btn btn-danger" value="Pretplati se">
        </div>
    </div>
    <div>
        <p>Besplatan sadržaj na društvenim mrežama!</p>
        <p>ZAPRATITE NAS</p>
        <ul class="clearfix">
            <li>
                <a href="#">
                    <img src="assets/media/facebook.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/media/youtube.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/media/instagram.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/media/linkedin.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/media/skype.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>