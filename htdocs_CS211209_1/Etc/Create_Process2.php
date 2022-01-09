<?php
file_put_contents('data/' . $_POST['title'], $_POST['description']);
//header('Location: /Index_PHP_Test011.php?id='.$_POST['title']);
header('Location: /Create.php?id='.$_POST['title']);
echo "<p>Check title: " . $_POST['title'] . "</p>";
echo "<p>Check description: " . $_POST['description'] . "</p>";
?>