@extends(default)

<div class="max-1200">
  <form action="/blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Naslov</label>
      <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}" required>
    </div>
    <div class="form-group">
      <label for="category">Kategorija</label>
      <input type="text" name="category" id="category" class="form-control" value="{{$blog->category}}">
    </div>
    <div class="form-group">
      <label for="thumbnail">Thumbnail</label>
      <input type="file" name="thumbnail" id="thumbnail">
    </div>
    <div class="form-group">
      <label for="description">Opis bloga</label>
      <textarea name="description" id="description" class="form-control" required>{{$blog->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="meta_description">Meta opis</label>
      <textarea name="meta_description" id="meta_description" class="form-control">{{$blog->meta_description}}</textarea>
    </div>
    <div class="form-group">
      <label for="meta_keywords">Meta ključne reči</label>
      <textarea name="meta_keywords" id="meta_keywords" class="form-control">{{$blog->meta_keywords}}</textarea>
    </div>
    <div class="form-group">
      <label for="content">Telo bloga</label>
      <textarea name="content" id="content" style="display:none;">{{$blog->content}}</textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
    </div>
    <div class="form-group">
      <input type="hidden" name="_method" value="PUT">
      {!! csrfFormField() !!}
      <input type="submit" value="Sačuvaj" class="btn btn-primary">
    </div>
  </form>
</div>