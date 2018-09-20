<?php //This view extends default layout ?>
 
<div class="wrapper">
  <div class="preview">
    <div class="video-container">
      <video src="storage/uploads/public/hero-video.mp4" controls>
        Your browser does support video tag
      </video>
    </div>
    <div class="course-info clearfix">
      <div class="clearfix">
        <span class="preview-icon" id="students"></span>
        <span>147 studenata</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="length"></span>
        <span>10 sati sadržaja</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="updatedAt"></span>
        <span>Ažuriran Jul 2018</span>
      </div>
      <div class="clearfix">
        <span class="preview-icon" id="author"></span>
        <span>Autor Nebojša Milićević</span>
      </div>
      <div class="clearfix">
        <span id="price">Cena 11.999 RSD</span>
      </div>
      <div class="clearfix">
        <button class="btn btn-danger btn-lg float-right">Kupi</button>
      </div>
    </div>
  </div>

  <div class="aside">
    <h3>Šta ću naučiti?</h3>
    <?php if(user()->isAdmin): ?>
      <form action="/custom-field" method="POST">
        <div class="form-group">
          <input type="text" name="value" class="form-control">
        </div>
        <div class="form-group clearfix">
          <?php echo ( csrfFormField() ); ?>
          <input type="hidden" name="name" value="what_will_I_learn">
          <input type="hidden" name="id_page" value="<?php echo htmlspecialchars($page->id); ?>">
          <input type="submit" class="btn btn-primary float-right" value="Dodaj">
        </div>
      </form>
    <?php endif; ?>
    <div class="col-2">
      <ul class="checked-style">
        <?php foreach($cf['what_will_I_learn'] as $row): ?>
        <li <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($row->id); ?>"><?php echo htmlspecialchars($row->value); ?></li>
        <li class="clearfix">
          <?php if(user()->isAdmin): ?>
          <form class="float-right" action="/custom-field/<?php echo htmlspecialchars($row->id); ?>" method="POST">
            <?php echo ( csrfFormField() ); ?>
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" value="Obriši">
          </form>
          <?php endif; ?>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    
    <h3>O kursu</h3>
    <?php if(user()->isAdmin): ?>
    <form action="/seo-kurs" method="POST" class="mb-50">
      <textarea name="content" id="content" style="display:none;"><?php echo htmlspecialchars($description->content); ?></textarea>
      <div id="RTE" data-target="content" data-css="assets/css/core/rich-text-editor.css"></div>
      <div class="clearfix">
        <?php echo ( csrfFormField() ); ?>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($description->id); ?>">
        <input type="submit" class="btn btn-primary float-right" value="Sačuvaj">
      </div>
    </form>
    <?php else: ?>
      <div class="description">
        <?php echo ($description->content); ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if(user()->isAdmin): ?>
    <button id="updateCustomFields" class="btn btn-primary mb-50">Sačuvaj</button>
  <?php endif; ?>
</div>