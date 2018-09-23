@extends(default)

<div class="wrapper max-1200">
  @if(user()->isAdmin)
    <p class="clearfix" style="margin-bottom:30px;">
       <a href="/nasi-partneri/create" class="btn btn-primary float-right">Dodaj partnera</a>
    </p>
  @endif
  <div class="partners clearfix">
    @foreach($partners as $partner)
    <div class="partner">
      @if(user()->isAdmin)
        <a href="/nasi-partneri/{{$partner->id}}">
          <img src="{{$partner->logo}}" alt="{{$partner->name}}">
        </a>
      @else
        <img src="{{$partner->logo}}" alt="{{$partner->name}}">
      @endif
    </div>
    @endforeach
  </div>
</div>