<?php //This view extends default layout ?>

<div class="max-1200" style="padding:50px 0;">
 
  <video src="<?php echo htmlspecialchars($video->source); ?>" width="1200" controls></video>

  <form style="padding:15px 0;" action="/video/<?php echo htmlspecialchars($video->id); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group clearfix">
      <label for="videoTitle">Naslov snimka</label>
      <input type="text" name="title" class="form-control" id="videoTitle" value="<?php echo htmlspecialchars($video->title); ?>">
    </div>
    <div class="form-group">
      <input type="hidden" name="id_section" value="<?php echo htmlspecialchars($video->id_section); ?>">
      <label for="videoDuration">Trajanje snimka (sec)</label>
      <input type="number" name="duration" class="form-control inline" value="<?php echo htmlspecialchars($video->duration); ?>">
      <input type="file" name="video">
    </div>
    <div class="form-group">
      <input type="hidden" name="_method" value="PUT">
      <?php echo ( csrfFormField() ); ?>
      <input type="submit" class="btn btn-primary" value="Sačuvaj">
    </div>
  </form>

</div>