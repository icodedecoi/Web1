<?php

unlink('data/'.basename($_POST['id']));
header('Location: /Index_PHP_Test011.php');

//unlink('data/'.$_POST['id']);
//header('Location: /Index_PHP_Test011.php');


//header('Location: http://127.0.0.1/Index_PHP_Test011.php');
?>