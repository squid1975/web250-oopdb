<?php

require_once('../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['member'];
  $member = new Member($args);
  $member->set_hashed_password();
  $result = $member->save();

  if($result === true) {
    $new_id = $member->id;
    $session->login($member);
    $_SESSION['message'] = 'You have been signed up successfully.';
    redirect_to(url_for('/birds/index.php'));
  } else {
    // show errors
  }

} else {
  // display the form
  $member = new Member;
}

?>

<?php $page_title = 'Signup'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/index.php'); ?>">&laquo; Back to List</a>

  <div class="member new">
    <h1>Create User</h1>

    <?php echo display_errors($member->errors); ?>

    <form action="<?php echo url_for('/signup.php'); ?>" method="post">

      <?php 
        include('members/form_fields.php'); 
      ?>

      <div id="operations">
        <input type="submit" value="Create User">
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>