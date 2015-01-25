<?php
 
    require_once 'database.class.php';

	    function clearInt($data) {
          return abs((int) $data);
         }


         function clearStr($data) {
          $data = trim(strip_tags($data));
		  return $data;
        }



$t =  clearStr($_POST['name']);
$c =  clearInt($_POST['id_category']);



if (empty($t) or empty($c)) {
 // $errMsg = "Заполните поля бля!!!";
  echo $errMsg;
 // echo '<a href="news.php">back</a>';
  
}else {
   $db = new database($pdo);
   $rows = $db->saveTov($t, $c);
    // $errMsg = "УРА";

   header('Location: news.php');
}
