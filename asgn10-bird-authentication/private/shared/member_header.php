<?php
  if(!isset($page_title)) { $page_title = 'Member Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
  </head>

  <body>
    <header>
      <h1>WNC Birds Member Area</h1>
    </header>

    <navigation>
      <ul>
        <?php if($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/active-record/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/active-record/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>