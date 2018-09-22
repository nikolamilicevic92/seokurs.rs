<?php //This view extends default layout ?>

<div class="wrapper max-1200">
  <div class="cards">
    <div class="card">
      <h3>Posetioci</h3>
      <span><?php echo htmlspecialchars($portfolio->visitors); ?></span>
    </div>
    <div class="card">
      <h3>Ključne reči</h3>
      <span><?php echo htmlspecialchars($portfolio->keywords); ?></span>
    </div>
    <div class="card">
      <h3>Profit</h3>
      <span><?php echo htmlspecialchars($portfolio->profit); ?></span>
    </div>
    <div class="card">
      <h3>Porudzbine</h3>
      <span><?php echo htmlspecialchars($portfolio->orders); ?></span>
    </div>
  </div>
  <div>
    <img class="analytics" src="<?php echo htmlspecialchars($portfolio->analytics); ?>" alt="<?php echo htmlspecialchars($portfolio->title); ?>">
  </div>
  <div class="content blog-single">
    <?php echo htmlspecialchars($portfolio->content); ?>
  </div>
  <?php if(user()->isAdmin): ?>
    <div class="clearfix" style="padding:50px 0;">
      <a href="/portfolio/<?php echo htmlspecialchars($portfolio->id); ?>/edit" class="float-left" style="margin-right:5px;">
        <button class="btn btn-primary">Izmeni</button>
      </a> 
      <form action="/portfolio/<?php echo htmlspecialchars($portfolio->id); ?>" method="post" class="float-left">
        <?php echo ( csrfFormField() ); ?>
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Obriši" class="btn btn-danger">
      </form>
    </div>
  <?php endif; ?>
</div>