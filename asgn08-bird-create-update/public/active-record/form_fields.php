<?php

// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('../public/index.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="common_name" value="<?php echo h($bird->common_name); ?>" ></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="habitat" value="<?php echo h($bird->habitat);?>" ></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="food" value="<?php echo h($bird->food);?>" ></dd>
</dl>

<dl>
  <dt>Conservation Level</dt>
  <dd>
    <select name="conservation_id">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $cons_id=> $cons_value) { ?>
      <option value="<?php echo $cons_id; ?>"<?php if($bird->conservation_id === $cons_id) { echo 'selected';}?>><?php echo $cons_value; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><textarea name="backyard_tips" rows="5" cols="50"><?php echo h($bird->backyard_tips);?></textarea></dd>
</dl>
