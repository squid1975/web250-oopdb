<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/public/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Save record using post parameters
  $args = [];
  $args['common_name'] = $_POST['common_name'] ?? NULL;
  $args['habitat'] = $_POST['habitat'] ?? NULL;
  $args['food'] = $_POST['food'] ?? NULL;
  $args['conservation_id'] = $_POST['conservation_id'] ?? NULL;
  $args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

  $bird = [];

  $result = false;
  if($result === true) {
    $_SESSION['message'] = 'The bird was updated successfully.';
    redirect_to(url_for('/staff/bicycles/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {
  // DISPLAY FORM 
  $bird = Bird::find_by_id($id);
  if($bird === false){
    redirect_to(url_for('/public/birds.php'));
  }
}
?>

<?php $page_title = 'Edit Bird'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>
<div class="bird edit">
    <h1>Edit Bird</h1>

    <?php // echo display_errors($errors); ?>

    <form action="<?php echo url_for('/public/active-record/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Edit Bird">
      </div>
    </form>

  </div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
