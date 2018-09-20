@extends(default)

<div class="max-1200" style="padding:50px 0;">
 
  <video src="{{$video->source}}" width="1200" controls></video>

  <form style="padding:15px 0;" action="/video/{{$video->id}}" method="POST" enctype="multipart/form-data">
    <div class="form-group clearfix">
      <label for="videoTitle">Naslov snimka</label>
      <input type="text" name="title" class="form-control" id="videoTitle" value="{{$video->title}}">
    </div>
    <div class="form-group">
      <input type="hidden" name="id_section" value="{{$video->id_section}}">
      <label for="videoDuration">Trajanje snimka (sec)</label>
      <input type="number" name="duration" class="form-control inline" value="{{$video->duration}}">
      <input type="file" name="video">
    </div>
    <div class="form-group">
      <input type="hidden" name="_method" value="PUT">
      {!! csrfFormField() !!}
      <input type="submit" class="btn btn-primary" value="Sačuvaj">
    </div>
  </form>

</div>