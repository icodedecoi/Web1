<?php
function print_title()
{
  if (isset($_GET['id'])) {
    echo $_GET['id'];
  } else {
    echo "Welcome!!";
  }
}

function print_discription()
{
  if (isset($_GET['id'])) {
    $b = $_GET['id'];
    echo file_get_contents("data/$b");
  } else {
    echo "Hello, PHP";
  }
}

function print_list()
{
  $list = scandir('data');
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != ".") {
      if ($list[$i] != "..") {
        echo "<li><a href=\" Index_PHP_Test011.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    print_title();
    ?>
  </title>
</head>

<body>
  <br>
  <h1><a href="index_PHP_Test011.php" </a>Test_Web</h1>
  <br>
  <ol>
    <?php
    print_list();
    ?>
  </ol>
  <a href="Creat.php">Creat</a>
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

</body>

</html>