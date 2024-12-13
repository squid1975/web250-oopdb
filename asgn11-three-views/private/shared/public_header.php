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
        <?php if($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/active-record/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
      </ul>
    </navigation>

    <navigation>
      <ul>
        <?php } elseif(!$session) { ?>
        <li><a href="<?php echo url_for('/login.php'); ?>">Log In</li>
        <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
        <li><a href="<?php echo url_for('/birds/about.php'); ?>">About Us</a></li>
        <?php } ?>
      </ul>
    </navigation>
    </header>

