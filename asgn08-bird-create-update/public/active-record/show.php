<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Show Bird: ' . h($bird->common_name); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

<a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird show">

    <h1>Bird: <?php echo h($bird->common_name); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo h($bird->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Model</dt>
        <dd><?php echo h($bird->food); ?></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><?php echo h($bird->conservation_id); ?></dd>
      </dl>
      <dl>
        <dt>Category</dt>
        <dd><?php echo h($bird->backyard_tips); ?></dd>
      </dl>
    </div>

  </div>

</div>
