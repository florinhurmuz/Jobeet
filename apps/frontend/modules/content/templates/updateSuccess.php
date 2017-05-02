<?php if ($sf_params->has('name')): ?>
  <p>Hello, <?php echo $sf_params->get('name') ?>!</p>
<?php else: ?>
  <p>Hello, The Unknown!</p>
<?php endif; ?>