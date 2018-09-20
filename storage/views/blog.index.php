<?php //This view extends default layout ?>

<div class="max-1200 clearfix">
  <?php if(user()->isAdmin): ?>
    <p class="clearfix" style="margin-bottom:30px;">
       <a href="/blog/create" class="btn btn-primary float-right">Kreiraj blog</a>
    </p>
  <?php endif; ?>
  <div>
    <?php foreach($blogs as $blog): ?>
    <div class="post">
      <div class="thumbnail-container">
        <a href="blog/<?php echo htmlspecialchars($blog->url_title); ?>">
          <img class="thumbnail"
            src="<?php echo htmlspecialchars($blog->thumbnail); ?>" 
            alt="<?php echo htmlspecialchars($blog->title); ?>"
          >
        </a>
      </div>
      <div class="title-container">
        <h2 class="post-title">
          <a href="blog/<?php echo htmlspecialchars($blog->url_title); ?>"><?php echo htmlspecialchars($blog->title); ?></a>
        </h2>
      </div>
      <p class="post-description"><?php echo htmlspecialchars($blog->description); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</div>