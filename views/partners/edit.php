@extends(default)

<div class="max-1200">
  <form action="/nasi-partneri/{{$partner->id}}" method="POST" style="padding:50px 0;" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Ime partnera</label>
      <input type="text" name="name" id="name" class="form-control" value="{{$partner->name}}" required>
    </div>
    <div class="form-group">
      <label for="logo" style="display:block;">Logo</label>
      <input type="file" name="logo" id="logo">
    </div>
    <div class="form-group">
      {!! csrfFormField() !!}
      <input type="hidden" name="_method" value="PUT">
      <input type="submit" value="Sačuvaj" class="btn btn-primary">
    </div>
  </form>
</div>