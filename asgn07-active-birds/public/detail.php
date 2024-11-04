<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested ID

  // Find bicycle using ID

?>

<?php $page_title = 'Detail'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="birds.php">Back to All Birds</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Common Name</dt>
        <dd><?php echo h($bike->brand); ?></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo h($bike->model); ?></dd>
      </dl>
      <dl>
        <dt>Food</dt>
        <dd><?php echo h($bike->year); ?></dd>
      </dl>
      <dl>
        <dt>Conservation</dt>
        <dd><?php echo h($bike->category); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips</dt>
        <dd><?php echo h($bike->gender); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
