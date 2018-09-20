
<div>
  <nav class="max-1200 clearfix">  
    <ul class="menu-links clearfix">
      <li>
          <span id="menuToggle"></span>
      </li>

      <li>
        <a class="menu-link logo clearfix" href="/">
          <span class="first-part">SEO</span><span class="second-part">KURS</span>
        </a>
      </li>

      <!-- <li><a class="menu-link {{isActive('/')}}" href="/">POČETNA</a></li> -->
      <li><a class="menu-link {{isActive('seo-kurs')}}" href="seo-kurs">KURS</a></li>
      <li><a class="menu-link {{isActive('seo-optimizacija')}}" href="seo-optimizacija">OPTIMIZACIJA</a></li>
      <li><a class="menu-link {{isActive('konsultacije')}}" href="konsultacije">SAVETOVANJE</a></li>
      <li><a class="menu-link {{isActive('portfolio')}}" href="portfolio">PROJEKTI</a></li>
      <li><a class="menu-link {{isActive('nasi-partneri')}}" href="nasi-partneri">PARTNERI</a></li>
      <li><a class="menu-link {{isActive('o-nama')}}" href="o-nama">MENTOR</a></li>
      <li><a class="menu-link {{isActive('kontakt')}}" href="kontakt">KONTAKT</a></li>
      <li><a class="menu-link {{isActive('blog')}}" href="blog">BLOG</a></li>
      
      @if(user()->status('guest'))
        <li><a class="menu-link {{isActive(LOGIN_URI)}}" href="{{LOGIN_URI}}">LOG IN</a></li>   
      @else     
        <li><a class="menu-link" href="/logout">LOG OUT</a></li>
      @endif         
    </ul>
  </nav>
</div>