@extends(default)

<div class="max-1200 clearfix">
  @if(user()->isAdmin)
    <a href="/portfolio/create" class="btn btn-primary float-right">Kreiraj portfolio</a>
  @endif
</div>
<div class="wrapper max-1200 clearfix">
  @foreach($portfolios as $portfolio)
    <div class="job">
      <h2>
        <a href="portfolio/{{$portfolio->url_title}}">
          {{$portfolio->title}}
        </a>
      </h2>
      <div class="description clearfix">
        <img 
          src="{{$portfolio->thumbnail}}" 
          alt="{{$portfolio->title}}"
        >
        <p>{{$portfolio->description}}</p>
        <span class="{{$portfolio->platform}}-logo"></span>
      </div>
    </div>
  @endforeach
</div>