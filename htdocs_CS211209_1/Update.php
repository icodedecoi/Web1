<?php
require_once('Lib/Print.php');
require('View/Top.php');
require('Lib/Img.php');
?>


  <a href="Create.php">Create_Section</a>
  <?php if (isset($_GET['id'])) { ?>
    <a href="Update.php?id=<?php echo $_GET['id']; ?>">Update</a>
  <?php } ?>

  <h2>
    <?php
    //http://127.0.0.1/Index_PHP_Test011.php
   
    print_title();
    ?>

  </h2>

  <?php
  
  //print_discription();
  ?>


  <form action="Update_Process.php" method="post"">
  <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
<p>
  <input type=" text" name="title" placeholder="Title" value="<?php print_title(); ?>">
    </p>

    <p>
      <textarea name="description" placeholder="Description"><?php print_discription(); ?></textarea>
    </p>

    <p>

      <input type="submit">
    </p>
  </form>


  <?php

require('View/Bottom.php');
?>