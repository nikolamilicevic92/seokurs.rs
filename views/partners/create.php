@extends(default)

<div class="max-1200">
  <form action="/nasi-partneri" method="POST" style="padding:50px 0;" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Ime partnera</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="logo" style="display:block;">Logo</label>
      <input type="file" name="logo" id="logo">
    </div>
    <div class="form-group">
      {!! csrfFormField() !!}
      <input type="submit" value="Sačuvaj" class="btn btn-primary">
    </div>
  </form>
</div>