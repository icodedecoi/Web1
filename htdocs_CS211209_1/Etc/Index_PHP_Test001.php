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
  <h1>URL_Print_Test001</h1>
  <br>
  안녕하세요.
  <?php
  echo $_GET['address'];
  ?>
  에 사시는
  <?php
  echo $_GET['name'];
  //http://127.0.0.1/Index_PHP_Test001.php?name=pcs&address=qwert
  ?> 님 반갑습니다<br>


  <br>
  <h1>Var_Test001</h1>
  <br>
  <?php
  //echo "Hello!!!!!~~~";
  //echo date('Y-m-d H:i:s');
  echo "Hello \"W\" orld<br>";
  echo "Hello!!!!!~~~<br>";
  echo 1 * 8;
  print(2);
  echo "Hello" . "world"; //문자열 결합
  echo strlen("Hellow world<br>");

  $str1 = "<br>이것이 mySQL이다<br>";
  echo $str1;
  $str2 = "SELECT * FROM userTBL WHERE userID = 'JYP' <br>";
  echo $str2;
  $arr3 = array(1, 2, 3);
  echo gettype($arr3);

  $name = "egoing123";
  echo "Lorem ipsum dolor sit " . $name . " amet consectetur adipisicing elit. Incidunt vel molestiae ullam ut qui, quia ab doloremque officiis dolores " . $name . " aspernatur labore velit repudiandae nobis quidem porro error vitae quisquam est";
  //http://127.0.0.1/Index_PHP_Test001.php?name=pcs&address=qwert
  ?>

  <!---
  <br>
  <h1>URL_Pharm_Test001</h1>
  <br>
  <ol>
    <li><a href="index_Test.php?id=HTML">HTML</a></li>
    aaa
    <li><a href="index_Test.php?id=CSS">CSS</a></li>
    <li><a href="index_Test.php?id=JavaScript">JavaScript</a></li>
  </ol>

  <h2>
    <?php
    // echo $_GET['id'];
    ?>
  </h2>
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, commodi autem, impedit illo fugiat iure voluptas beatae veritatis itaque perferendis eaque quasi sint architecto, modi unde aspernatur expedita. Iure, minima?
-->
</body>

</html>