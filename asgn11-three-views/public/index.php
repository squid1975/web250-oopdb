<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>


  <ul>
    <li><a href="<?php echo url_for('/birds/birds.php'); ?>">View Our Birds</a></li>
    <li><a href="<?php echo url_for('birds/about.php'); ?>">About Us</a></li>
    <li><a href="<?php echo url_for('/members/index.php'); ?>">Back to main menu</a></li>
  </ul>
    

<?php include(SHARED_PATH . '/public_footer.php'); ?>