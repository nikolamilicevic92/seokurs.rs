<?php //This view extends default layout ?>

<div class="max-1200">
  <img src="<?php echo htmlspecialchars($partner->logo); ?>" alt="<?php echo htmlspecialchars($partner->name); ?>">
  <?php if(user()->isAdmin): ?>
    <div class="clearfix" style="padding:50px 0;">
      <a href="/nasi-partneri/<?php echo htmlspecialchars($partner->id); ?>/edit" class="float-left" style="margin-right:5px;">
        <button class="btn btn-primary">Izmeni</button>
      </a> 
      <form action="/nasi-partneri/<?php echo htmlspecialchars($partner->id); ?>" method="post" class="float-left">
        <?php echo ( csrfFormField() ); ?>
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Obriši" class="btn btn-danger">
      </form>
    </div>
  <?php endif; ?>
</div>