<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  </head>

  <body>

  <header>
  <navigation>
    <ul>
      <?php if ($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/birds/birds.php'); ?>">Birds</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
      <?php } else { ?>
        <li><a href="<?php echo url_for('/login.php'); ?>">Log In</a></li>
        <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
      <?php } ?>
      <li><a href="<?php echo url_for('/birds/about.php'); ?>">About Us</a></li>
    </ul>
  </navigation>
</header>

