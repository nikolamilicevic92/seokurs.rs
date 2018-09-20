<?php //This view extends default layout ?>

<div class="max-1200 clearfix">
  <?php if(user()->isAdmin): ?>
    <a href="/portfolio/create" class="btn btn-primary float-right">Kreiraj portfolio</a>
  <?php endif; ?>
</div>
<div class="wrapper max-1200 clearfix">
  <?php foreach($portfolios as $portfolio): ?>
    <div class="job">
      <h2>
        <a href="portfolio/<?php echo htmlspecialchars($portfolio->url_title); ?>">
          <?php echo htmlspecialchars($portfolio->title); ?>
        </a>
      </h2>
      <div class="description clearfix">
        <img 
          src="<?php echo htmlspecialchars($portfolio->thumbnail); ?>" 
          alt="<?php echo htmlspecialchars($portfolio->title); ?>"
        >
        <p><?php echo htmlspecialchars($portfolio->description); ?></p>
        <span class="<?php echo htmlspecialchars($portfolio->platform); ?>-logo"></span>
      </div>
    </div>
  <?php endforeach; ?>
</div>