
<div>
  <nav class="max-1200 clearfix">  
    <ul class="menu-links clearfix">
      <li>
          <span id="menuToggle"></span>
      </li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('/')); ?>" href="/">POČETNA</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('seo-kurs')); ?>" href="seo-kurs">SEO KURS</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('seo-optimizacija')); ?>" href="seo-optimizacija">SEO OPTIMIZACIJA</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('konsultacije')); ?>" href="konsultacije">KONSULTACIJE</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('portfolio')); ?>" href="portfolio">PORTFOLIO</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('nasi-partneri')); ?>" href="nasi-partneri">NASI PARTNERI</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('o-nama')); ?>" href="o-nama">O NAMA</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('kontakt')); ?>" href="kontakt">KONTAKT</a></li>
      <li><a class="menu-link <?php echo htmlspecialchars(isActive('blog')); ?>" href="blog">NOVOSTI</a></li>
      
      <?php if(user()->status('guest')): ?>
        <li><a class="menu-link <?php echo htmlspecialchars(isActive(LOGIN_URI)); ?>" href="<?php echo htmlspecialchars(LOGIN_URI); ?>">ULOGUJ SE</a></li>   
      <?php else: ?>     
        <li><a class="menu-link" href="/logout">IZLOGUJ SE</a></li>
      <?php endif; ?>         
    </ul>
  </nav>
</div>