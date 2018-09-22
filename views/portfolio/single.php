@extends(default)

<div class="wrapper max-1200">
  <div class="cards">
    <div class="card">
      <h3>Ukupan broj posetilaca</h3>
      <span>{{$portfolio->visitors}}</span>
    </div>
    <div class="card">
      <h3>Ključne reči u top 100</h3>
      <span>{{$portfolio->keywords}}</span>
    </div>
    <div class="card">
      <h3>Zarada u mesecu</h3>
      <span>{{$portfolio->profit}}</span>
    </div>
    <div class="card">
      <h3>Konverzije</h3>
      <span>{{$portfolio->orders}}</span>
    </div>
  </div>
  <div>
    <img class="analytics" src="{{$portfolio->analytics}}" alt="{{$portfolio->title}}">
  </div>
  <div class="content blog-single">
    {{$portfolio->content}}
  </div>
  @if(user()->isAdmin)
    <div class="clearfix" style="padding:50px 0;">
      <a href="/portfolio/{{$portfolio->id}}/edit" class="float-left" style="margin-right:5px;">
        <button class="btn btn-primary">Izmeni</button>
      </a> 
      <form action="/portfolio/{{$portfolio->id}}" method="post" class="float-left">
        {!! csrfFormField() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Obriši" class="btn btn-danger">
      </form>
    </div>
  @endif
</div>