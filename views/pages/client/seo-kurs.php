@extends(default)
 
<div class="wrapper">
  <div class="preview">
    <div class="video-container">
      <video src="storage/uploads/public/hero-video.mp4" controls>
        Your browser does support video tag
      </video>
    </div>
    <div class="course-info clearfix">
      <div class="clearfix">
        <span class="preview-icon" id="students"></span>
        <span>147 studenata</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="length"></span>
        <span>10 sati sadržaja</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="updatedAt"></span>
        <span>Ažuriran Jul 2018</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="author"></span>
        <span>Autor Nebojša Milićević</span>
      </div>
      <div class="clearfix">
        <span id="price">Cena 11.999 RSD</span>
      </div>
      <div class="clearfix">
        <button class="btn btn-danger btn-lg float-right shdw">Kupi</button>
      </div>
    </div>
  </div>

  <div class="aside">
    <h3>Šta ću naučiti?</h3>
    @if(user()->isAdmin)
      <form action="/custom-field" method="POST">
        <div class="form-group">
          <input type="text" name="value" class="form-control">
        </div>
        <div class="form-group clearfix">
          {!! csrfFormField() !!}
          <input type="hidden" name="name" value="what_will_I_learn">
          <input type="hidden" name="id_page" value="{{$page->id}}">
          <input type="submit" class="btn btn-primary float-right" value="Dodaj">
        </div>
      </form>
    @endif
    <div class="col-2">
      <ul class="checked-style">
        @foreach($cf['what_will_I_learn'] as $row)
        <li {{$editable}} data-id="{{$row->id}}">{{$row->value}}</li>
        <li class="clearfix">
          @if(user()->isAdmin)
          <form class="float-right" action="/custom-field/{{$row->id}}" method="POST">
            {!! csrfFormField() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" value="Obriši">
          </form>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
    
    <h3>O kursu</h3>
    @if(user()->isAdmin)
    <form action="/seo-kurs" method="POST" class="mb-50">
      <textarea name="content" id="content" style="display:none;">{{$description->content}}</textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
      <div class="clearfix">
        {!! csrfFormField() !!}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{$description->id}}">
        <input type="submit" class="btn btn-primary float-right" value="Sačuvaj">
      </div>
    </form>
    @else
      <div class="description">
        {!!$description->content!!}
      </div>
    @endif
  </div>

  @if(user()->isAdmin)
    <button id="updateCustomFields" class="btn btn-primary mb-50">Sačuvaj</button>
  @endif
</div>