@extends(default)

<div class="max-1200">
  <img src="{{$partner->logo}}" alt="{{$partner->name}}">
  @if(user()->isAdmin)
    <div class="clearfix" style="padding:50px 0;">
      <a href="/nasi-partneri/{{$partner->id}}/edit" class="float-left" style="margin-right:5px;">
        <button class="btn btn-primary">Izmeni</button>
      </a> 
      <form action="/nasi-partneri/{{$partner->id}}" method="post" class="float-left">
        {!! csrfFormField() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Obriši" class="btn btn-danger">
      </form>
    </div>
  @endif
</div>