<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a>
      </h1>

      <navigation>
      <ul>
      <?php if(!$session->is_logged_in()) { ?>
        <li><a href="<?php echo url_for('/login.php'); ?>">Log in</a></li>
        <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
      <?php } ?>
      <?php if($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
        <?php } ?>
        <li><a href="<?php echo url_for('/birds/about.php'); ?>">About</a></li>
      </ul>
    </navigation>
    </header>

