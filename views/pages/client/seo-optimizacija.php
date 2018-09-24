@extends(default)


<div class="wrapper clearfix">
    
  <div id="accordions">

    
    <div class="accordion">

      <span class="accordion-toggle closed"></span>

      <div class="accordion-header clearfix">
        <h2>On Page SEO</h2>
        <span onclick="showForm('On Page SEO')" class="purchase-btn">Kontakt</span>
      </div>

      <div class="accordion-content collapsed clearfix">

        <ul>
          @foreach($seo['on_page_seo'] as $data)
            <li>{{$data->title}}</li>
          @endforeach
        </ul>

        <div class="content-description">
          @foreach($seo['on_page_seo'] as $data)
          <div data-id="{{$data->id}}">
            <h3 {{$editable}}>{{$data->title}}</h3>
            <p {{$editable}}>{{$data->description}}</p>
            @if(user()->isAdmin)
              <button onclick="remove({{$data->id}})" class="btn btn-danger delete">Izbriši</button>
            @endif
          </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="accordion">

      <span class="accordion-toggle closed"></span>

      <div class="accordion-header clearfix">
        <h2>Tehnički SEO</h2>
        <span onclick="showForm('Tehnicki SEO')" class="purchase-btn">Kontakt</span>
      </div>

      <div class="accordion-content collapsed clearfix">

        <ul>
          @foreach($seo['tehnicki_seo'] as $data)
            <li>{{$data->title}}</li>
          @endforeach
        </ul>

        <div class="content-description">
          @foreach($seo['tehnicki_seo'] as $data)
          <div data-id="{{$data->id}}">
            <h3 {{$editable}}>{{$data->title}}</h3>
            <p {{$editable}}>{{$data->description}}</p>
            @if(user()->isAdmin)
              <button onclick="remove({{$data->id}})" class="btn btn-danger delete">Izbriši</button>
            @endif
          </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="accordion">

      <span class="accordion-toggle closed"></span>

      <div class="accordion-header clearfix">
        <h2>Off Page SEO</h2>
        <span onclick="showForm('Off Page SEO')" class="purchase-btn">Kontakt</span>
      </div>

      <div class="accordion-content collapsed clearfix">
        <ul>
          @foreach($seo['off_page_seo'] as $data)
            <li>{{$data->title}}</li>
          @endforeach
        </ul>

        <div class="content-description">
          @foreach($seo['off_page_seo'] as $data)
          <div data-id="{{$data->id}}">
            <h3 {{$editable}}>{{$data->title}}</h3>
            <p {{$editable}}>{{$data->description}}</p>
            @if(user()->isAdmin)
              <button onclick="remove({{$data->id}})" class="btn btn-danger delete">Izbriši</button>
            @endif
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div id="contactForm">
    <form action="kontakt" method="post">
      <h1>Imate drugačije zahteve SEO optimizacije?<br>
          Kontaktirajte nas ovde:</h1>
      <input class="form-control" type="text" name="ime_i_prezime" placeholder="Vaše ime" required>
      <input class="form-control" type="email" name="from" placeholder="Vaš email" required>
      <input class="form-control" type="text" name="broj_telefona" placeholder="Vaš broj telefona (opciono)">
      <input class="form-control" type="text" name="sajt" placeholder="Vaš sajt (opciono)">
      <textarea class="form-control" name="Poruka" cols="30" rows="10" placeholder="Ostavite poruku ovde..."></textarea>
      <input type="hidden" name="subject" value="Dodatni zahtevi SEO optimizacije">
      {!! csrfFormField() !!}
      <input type="submit" class="btn btn-primary" value="Pošalji">
    </form>
  </div>

  <form id="contactSpecific" action="kontakt" method="post">
    <h2 id="formTitle"></h2>
    <input class="form-control" type="text" name="ime_i_prezime" placeholder="Vaše ime" required>
    <input class="form-control" type="email" name="from" placeholder="Vaš email" required>
    <input class="form-control" type="text" name="broj_telefona" placeholder="Vaš broj telefona (opciono)">
    <input class="form-control" type="text" name="sajt" placeholder="Vaš sajt (opciono)">
    <textarea class="form-control" name="Poruka" cols="30" rows="10" placeholder="Ostavite poruku ovde..."></textarea>
    <input type="hidden" name="subject" id="subject">
    {!! csrfFormField() !!}
    <input type="submit" class="btn btn-primary" value="Pošalji">
    <input onclick="hideForm()" type="button" class="btn btn-primary" value="Otkaži">
  </form>
  
</div>

<div class="max-1200" style="padding: 50px 0;">
  @if(user()->isAdmin)
    <button type="button" id="updateSeoOptimizacija" class="btn btn-primary" style="margin-bottom:30px;">Sačuvaj izmene</button>
    <h3 class="light text-primary" style="margin-bottom:15px;">Dodaj novi</h3>
    <form action="/seo-optimizacija" method="post">
      <div class="form-group">
        <select name="category" class="form-control inline">
          <option value="on_page_seo">On Page SEO</option>
          <option value="off_page_seo">Off Page SEO</option>
          <option value="tehnicki_seo">Tehnički SEO</option>
        </select>
      </div>
      <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
        <textarea name="description" class="form-control">Description...</textarea>
      </div>
      <div class="clearfix">
        {!! csrfFormField() !!}
        <input class="btn btn-primary" type="submit" value="Dodaj">
      </div>
  </form>
  @endif
</div>