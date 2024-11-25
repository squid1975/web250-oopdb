<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  </head>

  <body>

    <header>
      <h1>
        <?php if($session->is_logged_in()){ ?>
          <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a>
        <a href="<?php echo url_for('users/logout.php'); ?>">
          Logout
        </a>
        <?php } else {?>
          <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a> <?php }?>
      </h1>
    </header>
