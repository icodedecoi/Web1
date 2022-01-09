<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index_PHP_Test</title>
</head>

<body>
  <h1>Function_Test001</h1>
  <br>
  <?php
  //http://127.0.0.1/Index_PHP_Test003.php
  $str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, commodi autem.
  
  impedit illo fugiat iure voluptas beatae veritatis itaque perferendis eaque quasi sint architecto, modi unde aspernatur expedita. Iure, minima";
  echo $str;
  ?>

  <br>
  <h2>String_Length</h2>
  <?php
  echo strlen($str);
  ?>

  <br>
  <h2>String_nl2br</h2>
  <?php
  echo nl2br($str);
  ?>


</body>

</html>