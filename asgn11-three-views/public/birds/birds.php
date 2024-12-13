<?php 
  require_once('../../private/initialize.php');
  $page_title = 'Bird List';
  include(SHARED_PATH . '/public_header.php');
?>

<ul>
<?php if(!$session->is_admin_logged_in()) { ?>
    <li><a href="<?php echo url_for('/login.php'); ?>">Log in</a></li>
    <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
  <?php } ?>
  <?php if($session->is_admin_logged_in()) { ?>
    <li><a href="<?php echo url_for('/members/index.php'); ?>">View Members</a></li>
  <?php } ?>
    <li><a href="<?php echo url_for('birds/about.php'); ?>">About Us</a></li>
  </ul>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<?php if ($session->is_logged_in()) { ?>

<a href="<?php echo url_for('birds/new.php'); ?>">Add a Bird</a>

<?php } ?>

    <table border="1">
      <tr>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

<?php

// Create a new bird object that uses the find_all() method
$birds = Bird::find_all();

  foreach($birds as $bird) { 

  ?>
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <td><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>


        <?php if ($session->is_logged_in()) { ?>

        <td><a href="birds/edit.php?id=<?php echo $bird->id; ?>">Edit</a></td>
        <td><a href="<?php echo url_for('/birds/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
      
      <?php } ?>
      </tr>
      <?php } ?>

    </table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
