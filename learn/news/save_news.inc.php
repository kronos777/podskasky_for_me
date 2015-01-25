<?php
 
    require_once 'database.class.php';

	    function clearInt($data) {
          return abs((int) $data);
         }


         function clearStr($data) {
          $data = trim(strip_tags($data));
		  return $data;
        }



$t =  clearStr($_POST['title']);
$c =  clearInt($_POST['category']);
$d =  clearStr($_POST['description']);
$s =  clearStr($_POST['source']);


if (empty($t) or empty($d)) {
 // $errMsg = "Заполните поля бля!!!";
  echo $errMsg;
 // echo '<a href="news.php">back</a>';
  
}else {
   $db = new database($pdo);
   $rows = $db->saveNews($t, $c, $d, $s);
    // $errMsg = "УРА";

   header('Location: news.php');
}
