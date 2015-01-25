<?php

/**
 * @author admin
 * @copyright 2015
 */


require_once '../join.php';

$viewH = new htmlcss;
$viewH->header();



if (isset($_GET)) {
  $p = (int) $_GET;
  

  
  
  $news = new join;
  $news->newsId($p);
     //var_dump($news); 
     $back = $_SERVER['HTTP_REFERER'];
      echo '<a href="'.$back.'">вернуться назад</a>';
} else {
    echo 'В гете ничего неболы.';
}



$viewH->footer();

  
?>