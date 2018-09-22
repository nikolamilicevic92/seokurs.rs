
<div>
  <nav class="max-1200 clearfix">  
    <ul class="menu-links clearfix">
      <li class="clearfix">
          <a id="hideOnBig" class="menu-link logo clearfix float-left" href="/">
            <!-- <span class="first-part">SEO</span><span class="second-part">KURS</span> -->
            <span></span>
          </a>
          <span id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
      </li>
      <li id="hideOnSmall">
        <a class="menu-link logo clearfix" href="/">
          <span></span>
          <!-- <span class="first-part">SEO</span><span class="second-part">KURS</span> -->
        </a>
      </li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('seo-kurs')); ?>" href="seo-kurs">KURS</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('seo-optimizacija')); ?>" href="seo-optimizacija">OPTIMIZACIJA</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('konsultacije')); ?>" href="konsultacije">SAVETOVANJE</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('portfolio')); ?>" href="portfolio">PROJEKTI</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('nasi-partneri')); ?>" href="nasi-partneri">PARTNERI</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('o-nama')); ?>" href="o-nama">MENTOR</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('kontakt')); ?>" href="kontakt">KONTAKT</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('blog')); ?>" href="blog">BLOG</a></li>
      
      <?php if(user()->status('guest')): ?>
        <li><a class="menu-link <?php echo htmlspecialchars(isActive(LOGIN_URI)); ?>" href="<?php echo htmlspecialchars(LOGIN_URI); ?>">SIGN UP</a></li>   
      <?php else: ?>     
        <li><a class="menu-link" href="/logout">SIGN OUT</a></li>
      <?php endif; ?>         
    </ul>
  </nav>
</div>