<p>Hello, world!</p>

<?php if ($hour >= 18): ?>
  <p>Or should I say good evening? It is already <?php echo $hour ?>.</p>
<?php endif; ?>


<form method="post" action="<?php echo url_for('content/update') ?>">
  <label for="name">What is your name?</label>
  <input type="text" name="name" id="name" value="" />

  <input type="submit" value="Ok" />

  <?php echo link_to('I never say my name', 'content/update?name=anonymous') ?>
</form>


// Option argument as an associative array
<?php echo link_to('I never say my name', 'content/update?name=anonymous',
  array(
    'class'    => 'special_link',
    'confirm'  => 'Are you sure?',
    'absolute' => true
)) ?>
 
// Option argument as a string
<?php echo link_to('I never say my name', 'content/update?name=anonymous',
  'class=special_link confirm=Are you sure? absolute=true') ?>
 
// Both calls output the same
 => <a class="special_link" onclick="return confirm('Are you sure?');"
    href="http://localhost/frontend_dev.php/content/update/name/anonymous">
    I never say my name</a>