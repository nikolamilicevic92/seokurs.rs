<?php //This view extends default layout ?>

<div class="wrapper max-1200 clearfix">
  <div class="tabs">
    <ul>
      <li class="active"><h2 class="light" ><?php echo htmlspecialchars($cf['t1']->value); ?></h2></li>
      <li><h2 class="light" ><?php echo htmlspecialchars($cf['t2']->value); ?></h2></li>
      <li><h2 class="light"><?php echo htmlspecialchars($cf['t3']->value); ?></h2></li>
      <li><h2 class="light" ><?php echo htmlspecialchars($cf['t4']->value); ?></h2></li>
      <li><h2 class="light" ><?php echo htmlspecialchars($cf['t5']->value); ?></h2></li>
      <li><h2 class="light" ><?php echo htmlspecialchars($cf['t6']->value); ?></h2></li>
    </ul>
  </div>
  <div class="tabs-content">
    <ul>
      <li class="active">
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t1']->id); ?>"><?php echo htmlspecialchars($cf['t1']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t1_p']->id); ?>"><?php echo htmlspecialchars($cf['t1_p']->value); ?></div>
        <div class="flex-center">
          <img height="380" src="assets/media/mentor1.png" alt="">
        </div>
      </li>
      <li>
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t2']->id); ?>"><?php echo htmlspecialchars($cf['t2']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t2_p']->id); ?>"><?php echo htmlspecialchars($cf['t2_p']->value); ?></div>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor2.png" alt="">
        </div>
      </li>
      <li>
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t3']->id); ?>"><?php echo htmlspecialchars($cf['t3']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t3_p']->id); ?>"><?php echo htmlspecialchars($cf['t3_p']->value); ?></div>
        <div class="flex-center">
          <img height="350px" src="assets/media/Mentor3.png" alt="">
        </div>
      </li>
      <li>
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t4']->id); ?>"><?php echo htmlspecialchars($cf['t4']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t4_p']->id); ?>"><?php echo htmlspecialchars($cf['t4_p']->value); ?></div>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor4.png" alt="">
        </div>
      </li>
      <li>
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t5']->id); ?>"><?php echo htmlspecialchars($cf['t5']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t5_p']->id); ?>"><?php echo htmlspecialchars($cf['t5_p']->value); ?></div>
        <div class="flex-center">
          <img height="380px" src="assets/media/Mentor5.png" alt="">
        </div>
      </li>
      <li>
        <h3 <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t6']->id); ?>"><?php echo htmlspecialchars($cf['t6']->value); ?></h3>
        <div <?php echo htmlspecialchars($editable); ?> data-id="<?php echo htmlspecialchars($cf['t6_p']->id); ?>"><?php echo htmlspecialchars($cf['t6_p']->value); ?></div>
        <div class="flex-center">
          <img height="350px" src="assets/media/Mentor6.png" alt="">
        </div>
      </li>
    </ul>
  </div>
</div>
<?php if(user()->isAdmin): ?>
<div class="max-1200" style="padding: 50px 0;">
  <button id="updateCustomFields" class="btn btn-primary">Sačuvaj</button>
</div>
<?php endif; ?>