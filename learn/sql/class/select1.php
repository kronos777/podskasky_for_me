<?php

/**
 * @author admin
 * @copyright 2015
 */
require_once 'db.php';


class select1 extends db {
    function __construct() {
        parent::__construct();
    }
    
    
    function first () {
        $smt= $this->pdo->prepare("SELECT * FROM news WHERE id = 9
        or author_id <= 100
        LIMIT 3");
        $smt->execute();
        $data = $smt->fetchAll();
        foreach ($data as $row) {
                      $id = $row['id'];
                      $d = $row['publish_date'];
                      $title = $row['title'];
                      $text = $row['text'];
                      $a = $row['author_id'];
                      
                      echo <<<ZAP
                         <table class="table table-bordered">

    <tr>
      <td>$id</td>
      <td>$d</td>
      <td>$title</td>
      <td>$text</td>
      <td>$a</td>
	</tr>
  </table>
ZAP;
                  }
    }
    
    
    public static function hr () {
        echo '<pre style="background-color: #1874CD; margin: 0 15px;">разделитель</pre>';
    }
    
    
    function randomV () {
        $smt = $this->pdo->prepare("select title, author_id as rate
from news
ORDER BY rand() LIMIT 3");
        $smt->execute();
        $rrr = $smt->fetchAll();
foreach ($rrr as $row) {
                      $t = $row['title'];
                      $r = $row['rate'];
                     
                      echo <<<ZAP
                         <table class="table table-bordered">

    <tr>
      <td>$t</td>
      <td>$r</td>
	</tr>
  </table>
ZAP;
                  }

    }
     
}
?>