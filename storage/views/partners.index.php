<?php //This view extends default layout ?>

<div class="wrapper max-1200">
  <?php if(user()->isAdmin): ?>
    <p class="clearfix" style="margin-bottom:30px;">
       <a href="/nasi-partneri/create" class="btn btn-primary float-right">Dodaj partnera</a>
    </p>
  <?php endif; ?>
  <div class="partners clearfix">
    <?php foreach($partners as $partner): ?>
    <div class="partner">
      <?php if(user()->isAdmin): ?>
        <a href="/nasi-partneri/<?php echo htmlspecialchars($partner->id); ?>">
          <img src="<?php echo htmlspecialchars($partner->logo); ?>" alt="<?php echo htmlspecialchars($partner->name); ?>">
        </a>
      <?php else: ?>
        <img src="<?php echo htmlspecialchars($partner->logo); ?>" alt="<?php echo htmlspecialchars($partner->name); ?>">
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>