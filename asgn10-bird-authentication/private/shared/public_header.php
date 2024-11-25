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
        <?php if($session->is_logged_in()){ ?>
          <h2>
        <a href="<?php echo url_for('users/logout.php'); ?>">
          Logout
        </a>
        </h2>
        <?php } ?>
      </h1>
    </header>
