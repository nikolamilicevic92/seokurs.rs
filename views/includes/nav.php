
<div>
  <nav class="max-1200 clearfix">  
    <ul class="menu-links clearfix">
      <li>
          <span id="menuToggle"></span>
      </li>
      <li><a class="menu-link {{isActive('/')}}" href="/">POČETNA</a></li>
      <li><a class="menu-link {{isActive('seo-kurs')}}" href="seo-kurs">SEO KURS</a></li>
      <li><a class="menu-link {{isActive('seo-optimizacija')}}" href="seo-optimizacija">SEO OPTIMIZACIJA</a></li>
      <li><a class="menu-link {{isActive('konsultacije')}}" href="konsultacije">KONSULTACIJE</a></li>
      <li><a class="menu-link {{isActive('portfolio')}}" href="portfolio">PORTFOLIO</a></li>
      <li><a class="menu-link {{isActive('nasi-partneri')}}" href="nasi-partneri">NASI PARTNERI</a></li>
      <li><a class="menu-link {{isActive('o-nama')}}" href="o-nama">O NAMA</a></li>
      <li><a class="menu-link {{isActive('kontakt')}}" href="kontakt">KONTAKT</a></li>
      <li><a class="menu-link {{isActive('blog')}}" href="blog">NOVOSTI</a></li>
      
      @if(user()->status('guest'))
        <li><a class="menu-link {{isActive(LOGIN_URI)}}" href="{{LOGIN_URI}}">ULOGUJ SE</a></li>   
      @else     
        <li><a class="menu-link" href="/logout">IZLOGUJ SE</a></li>
      @endif         
    </ul>
  </nav>
</div>