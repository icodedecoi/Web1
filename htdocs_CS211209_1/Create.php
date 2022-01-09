<?php
require('Lib/Print.php');
require('View/Top.php');
require('Lib/Img.php');
?>

  <a href="Creat.php">Create Section</a>
  <form action="Create_Process.php" method="post"">
<p>
  <input type=" text" name="title" placeholder="Title">
    </p>

    <p>
      <textarea name="description" placeholder="Description"></textarea>
    </p>

    <p>

      <input type="submit">
    </p>
  </form>
  <?php

require('View/Bottom.php');
?>