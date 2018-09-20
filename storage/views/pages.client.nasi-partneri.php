<?php //This view extends default layout ?>

<div class="wrapper max-1200">
  <div class="partners clearfix">
    <?php foreach($partners as $partner): ?>
    <div class="partner">
      <img src="<?php echo htmlspecialchars($partner->logo); ?>" alt="<?php echo htmlspecialchars($partner->name); ?>">
    </div>
    <?php endforeach; ?>
  </div>
</div>