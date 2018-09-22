@extends(default)

<div class="max-1200 clearfix">
  @if(user()->isAdmin)
    <p class="clearfix" style="margin-bottom:30px;">
       <a href="/blog/create" class="btn btn-primary float-right">Kreiraj blog</a>
    </p>
  @endif
  <div>
    @foreach($blogs as $blog)
    <div class="post shdw">
      <div class="thumbnail-container">
        <a href="blog/{{$blog->url_title}}">
          <img class="thumbnail"
            src="{{$blog->thumbnail}}" 
            alt="{{$blog->title}}"
          >
        </a>
      </div>
      <div class="title-container">
        <h2 class="post-title">
          <a href="blog/{{$blog->url_title}}">{{$blog->title}}</a>
        </h2>
      </div>
      <p class="post-description">{{$blog->description}}</p>
    </div>
    @endforeach
  </div>
</div>