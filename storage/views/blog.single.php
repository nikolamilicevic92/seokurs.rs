<?php //This view extends default layout ?>

<div class="post">
  <?php echo ( $blog->content ); ?>

  <?php if(user()->isAdmin): ?>
    <div class="clearfix" style="padding:50px 0;">
      <a href="/blog/<?php echo htmlspecialchars($blog->id); ?>/edit" class="float-left" style="margin-right:5px;">
        <button class="btn btn-primary">Izmeni</button>
      </a> 
      <form action="/blog/<?php echo htmlspecialchars($blog->id); ?>" method="post" class="float-left">
        <?php echo ( csrfFormField() ); ?>
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Obriši" class="btn btn-danger">
      </form>
    </div>
  <?php endif; ?>
</div>