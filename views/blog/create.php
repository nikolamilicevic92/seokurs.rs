@extends(default)

<div class="max-1200">
  <form action="/blog" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Naslov</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="category">Kategorija</label>
      <input type="text" name="category" id="category" class="form-control">
    </div>
    <div class="form-group">
      <label for="thumbnail" style="display:block;">Thumbnail</label>
      <input type="file" name="thumbnail" id="thumbnail" required>
    </div>
    <div class="form-group">
      <label for="description">Opis bloga</label>
      <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <label for="meta_description">Meta opis</label>
      <textarea name="meta_description" id="meta_description" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="meta_keywords">Meta ključne reči</label>
      <textarea name="meta_keywords" id="meta_keywords" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="content">Telo bloga</label>
      <textarea name="content" id="content" style="display:none;"></textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
    </div>
    <div class="form-group">
      {!! csrfFormField() !!}
      <input type="submit" value="Sačuvaj" class="btn btn-primary">
    </div>
  </form>
</div>