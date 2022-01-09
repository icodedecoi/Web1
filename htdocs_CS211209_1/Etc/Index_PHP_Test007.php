<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index_PHP_Test</title>
</head>

<body>
  <br>
  <h1><a href="index_PHP_Test007.php" </a>TESt_WEB</h1>
  <br>
  <ol>
    <?php
    $list = scandir('data');
    $i = 0;
    while ($i < count($list)) {
      if ($list[$i] != ".") {
        if ($list[$i] != "..") {
    ?>

          <li><a href="Index_PHP_Test007.php?id=<?= $list[$i] ?>"><?= $list[$i] ?></a> </li>

    <?php
        }
      }
      $i = $i + 1;
    }
    ?>
  </ol>

  <h2>
    <?php
    //http://127.0.0.1/Index_PHP_Test007.php
    //$a = $_GET['id'];
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    } else {
      echo "Welcome";
    }
    ?>

  </h2>

  <?php
  //echo file_get_contents("Data/".$_GET['id']); 
  if (isset($_GET['id'])) {
    $b = $_GET['id'];
    echo file_get_contents("data/$b");
  } else {
    echo "Hello, PHP";
  }
  ?>

</body>

</html>