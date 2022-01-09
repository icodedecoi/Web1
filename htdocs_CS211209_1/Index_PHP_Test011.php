<?php
require('Lib/Print.php');
require('View/Top.php');
require('Lib/Img.php');
?>





<a href="Create.php">Create Section</a>
<?php if (isset($_GET['id'])) { ?>
  <a href="Update.php?id=<?php echo $_GET['id']; ?>">Update</a>
  <form action="Delete_Process.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input type="submit" value="delete">
  </form>
<?php } ?>

<h2>


  <?php
  //http://127.0.0.1/Index_PHP_Test011.php
  //$a = $_GET['id'];
  print_title();
  ?>

</h2>

<?php
//echo file_get_contents("Data/".$_GET['id']); 
print_discription();
?>

<?php

require('View/Bottom.php');
?>