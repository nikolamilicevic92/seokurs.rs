@extends(default)

<div class="max-1200">
  <form action="/portfolio" method="post" style="padding:50px 0" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Naslov</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="analytics" style="display:block;">Slika analitike</label>
      <input type="file" name="analytics" id="analytics" required>
    </div>
    <div class="form-group">
      <label for="thumbnail" style="display:block;">Thumbnail</label>
      <input type="file" name="thumbnail" id="thumbnail" required>
    </div>
    <div class="form-group">
      <label for="platform">Platforma</label>
      <input type="text" name="platform" id="platform" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="description">Opis portfolia</label>
      <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <label for="visitors">Broj posetilaca</label>
      <input type="text" name="visitors" id="visitors" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="keywords">Broj ključnih reči</label>
      <input type="text" name="keywords" id="keywords" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="profit">Ostvaren profit</label>
      <input type="text" name="profit" id="profit" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="orders">Broj porudzbina</label>
      <input type="text" name="orders" id="orders" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="meta_description">Meta opis</label>
      <input type="text" name="meta_description" id="meta_description" class="form-control">
    </div>
    <div class="form-group">
      <label for="meta_keywords">Meta ključne reči</label>
      <input type="text" name="meta_keywords" id="meta_keywords" class="form-control">
    </div>
    <div class="form-group">
      <label for="content">Telo portfolia</label>
      <textarea name="content" id="content" style="display:none;"></textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
    </div>
    <div>
      {!! csrfFormField() !!}
      <input type="submit" value="Sačuvaj" class="btn btn-primary">
    </div>
  </form>
</div>