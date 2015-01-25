<?php

/**
 * @author admin
 * @copyright 2015
 */

require 'testingclass.php';

	    function clearInt($data) {
          return abs((int) $data);
         }


         function clearStr($data) {
          $data = trim(strip_tags($data));
		  return $data;
        }


$n = clearStr($_POST['name']);
$t = clearStr($_POST['tel']);
$a = clearStr($_POST['address']);
$o = clearStr($_POST['opisanie']);



if (empty($n) or empty($t)) {
 // $errMsg = 
  echo "Заполните поля бля!!!";
 
  
}else {
   $obj = new test;
   $rows = $obj->addbook($n, $t, $a, $o);
    
    echo '<h1><img src="http://www.golyedevchata.org/images/anastasia-volochkova/smotret-goluy-anastasia-volockovu.jpg"></h1>';

  // header('Location: news.php');
}


?>
