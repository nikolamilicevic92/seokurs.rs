@extends(default)

  
<div class="wrapper">
  <div class="course-full">

    <div class="clearfix">
      <span id="videoTitle"></span>
      <span id="timer">&nbsp;</span>
    </div>

    <video src="" controls>
      Vas browser ne podrzava video tag
    </video>

    <div class="course-statistic">
      <p>Pregledano <span id="videosWatched"></span> od <span id="videosCount"></span> snimaka</p>
      <div class="progression-container">
        <div id="videosProgression"></div>
      </div>
      <p>Urađeno <span id="testsDone"></span> od <span id="testsCount"></span> testova</p>
      <div class="progression-container">
        <div id="testsProgression"></div>
      </div>
    </div>

    @if(user()->isAdmin)
    <!-- Form for creating new section -->
    <form action="/section" method="POST">
      <div class="form-group">
        <label for="sectionTitle">Ime sekcije</label>
        <input type="text" class="form-control" name="title" id="sectionTitle">
      </div>
      <div class="form-group">
        {!! csrfFormField() !!}
        <input type="submit" class="btn btn-primary" value="Dodaj">
      </div>
    </form>
    <!-- Form for uploading new video to the section -->
    
    <!-- Form for creating new test -->
    @endif
    <div class="sections">
      @foreach($sections as $section)
        <div class="section" data-id="{{$section->id}}">
          <h2 {{$editable}}>{{$section->title}}</h2>

          @if(user()->isAdmin)

            <!-- Button that trigers ajax call to update section name -->
            <button class="btn btn-primary update-section">Sačuvaj</button>

            <!-- Form for deleting a section -->
            <form class="delete-section" action="/section/{{$section->id}}" method="POST">
              {!! csrfFormField() !!}
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" class="btn btn-danger" value="Obriši">
            </form>

          @endif
          <ul class="videos">
            @foreach($section->videos as $index => $video)
            <li class="video clearfix" id="{{$video->source}}"
              onclick="play('{{$video->source}}')">
              <span class="video-play-icon"></span>
              <span class="index">{{($index+1) . '.'}}</span>
              <span class="video-title">{{$video->title}}</span>
              <span class="checkbox{{$video->watched}}"></span>
              <span class="duration">{{$video->duration}}</span>
              <input type="hidden" value="{{$video->id}}">
              @if(user()->isAdmin)
                <a href="/video/{{$video->id}}/edit">
                  <button class="btn btn-primary">Izmeni</button>
                </a>
                <button class="btn btn-danger delete-video" onclick="deleteVideo({{$video->id}})">Obriši</button>
              @endif
            </li>
            @endforeach
          </ul>
          @if(user()->isAdmin)
            <!-- Form for uploading new video to the section -->
            <form style="padding:15px 0;" action="/video" method="POST" enctype="multipart/form-data">
              <div class="form-group clearfix">
                <label for="videoTitle">Naslov snimka</label>
                <input type="text" name="title" class="form-control" id="videoTitle">
              </div>
              <div class="form-group">
                <input type="hidden" name="id_section" value="{{$section->id}}">
                <label for="videoDuration">Trajanje snimka (sec)</label>
                <input type="number" name="duration" class="form-control inline" value="600">
                <input type="file" name="video">
                {!! csrfFormField() !!}
                <input type="submit" class="btn btn-primary" value="Upload">
              </div>
            </form>
          @endif
          <ul class="tests clearfix">
            @foreach($section->tests as $test)
            <li class="test clearfix">
              <a class="test-name" href="/test/{{$test->id}}">{{$test->title}}</a>
              <span class="checkbox{{$test->done}}"></span>
              <a href="/test/{{$test->id}}/edit" style="margin-right:5px;">
                <button class="btn btn-primary">Izmeni</button>
              </a>
              <form class="delete-test" action="/test/{{$test->id}}" method="POST">
                {!! csrfFormField() !!}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Obriši">
              </form>
              <input type="hidden" class="test-id" value="{{$test->id}}">
            </li> 
            @endforeach
          </ul>
          @if(user()->isAdmin)
            <!-- Form for adding new test to the section -->
            <form style="padding:15px 0;" action="/test" method="POST">
              <div class="form-group clearfix">
                <label for="testTitle">Naslov testa</label>
                <input type="text" name="title" class="form-control" id="testTitle">
              </div>
              <div class="form-group">              
                <input type="hidden" name="id_section" value="{{$section->id}}">
                <label for="videoDuration">Trajanje testa (sec)</label>
                <input type="number" name="duration" class="form-control inline" value="600">
                {!! csrfFormField() !!}
                <input type="submit" class="btn btn-primary" value="Dodaj">
              </div>
            </form>
          @endif
        </div>
      @endforeach
    </div>
  </div>

  <div class="clearfix">
    <span id="toggleAside">O kursu</span>
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
    
    <h3>Opis</h3>
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