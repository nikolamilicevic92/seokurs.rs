<?php //This view extends default layout ?>

<div class="max-1200 clearfix">
  <?php foreach($pages as $page): ?>
  <div class="page" style="width:50%;padding:15px;float:left;" data-id="<?php echo htmlspecialchars($page->id); ?>">
    <div class="form-group">
      <h2 class="light text-primary text-center">seokurs.rs/<?php echo htmlspecialchars($page->page_name); ?></h2>
    </div>
    <div class="form-group">
      <label class="text-center" style="display:block;" for="title">Meta naslov</label>
      <input type="text" class="form-control title" value="<?php echo htmlspecialchars($page->title); ?>">
    </div>
    <div class="form-group">
      <label class="text-center text-info" style="display:block;" for="keywords">Meta ključne reči</label>
      <textarea maxlength="160" class="form-control keywords" rows="2" cols="50"><?php echo htmlspecialchars($page->keywords); ?></textarea>
    </div>
    <div class="form-group">
      <label class="text-center text-info" style="display:block;" for="description">Meta opis</label>
      <textarea maxlength="160" class="form-control description" rows="4" cols="50"><?php echo htmlspecialchars($page->description); ?></textarea>
    </div>
  </div>
  <?php endforeach; ?>
  <div style="padding:50px 15px">
    <button class="btn btn-primary">Sačuvaj</button>
  </div>
</div>
