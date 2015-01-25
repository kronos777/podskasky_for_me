<?php

/**
 * @author admin
 * @copyright 2015
 */
require_once 'db.php';


class join extends db {
    function __construct() {
        parent::__construct();
    }
    
     function terra () {
        $sql = "select e.id, e.title, d.id as num, d.name as author  
   from news e, addbook d 
  where e.id = d.id";
        $d = $this->pdo->query($sql);
        $data = $d->fetchAll();
        
        foreach ($data as $it) {
            $id = $it['id'];
            $title = $it['title'];
            $num = $it['num'];
            $author = $it['author'];
            
            echo <<<TER
              <table class="table table-bordered">

    <tr>
      <td>$id</td>
      <td>$title</td>
      <td>$num</td>
      <td>$author</td>
	</tr>
  </table>

TER;
        }
        
     } 
     
     
     
     function terra3 () {
        $sql = "select e.id, d.id_product, eb.id as num, eb.name
  from news e, products d, addbook eb
 where e.id=d.id_product 
   and e.id=eb.id";
   $d = $this->pdo->query($sql);
        $data = $d->fetchAll();
        
        foreach ($data as $qit) {
            $num = $qit['num'];
            $name = $qit['name'];
            
            echo <<<TER
              <table class="table table-bordered">

    <tr>
      <td>$num</td>
      <td>$name</td>
	</tr>
  </table>

TER;
        }
  // $ex = $this->terra();
     }
     
     function newsId ($p) {
        $sql = "SELECT id, title, text FROM news WHERE id = '$p'";
        $q = $this->pdo->query($sql);
        $data = $q->fetchAll();
        
        foreach ($data as $key) {
            $id = $key['id'];
            $title = $key['title'];
            $text = $key['text'];
            
            echo <<<NEWS
              <table class="table table-bordered">

    <tr>
      
     <td>$title</td>
      <td>$text</td>
	</tr>
  </table>
            
            
NEWS;
        }
     } 
     
     
     
}




class htmlcss {
    
    function header() {
        echo <<<HEADER

         <!doctype html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="http://learn/css/bootstrap.min.css" rel="stylesheet">
<link href="http://learn/css/style.css" rel="stylesheet">
<script src="http://learn/js/bootstrap.js"></script> 
<script src="search.js"></script> 
    <title>serch!!!</title>
  
</head>
<body style="margin: 25px auto; border: 1px solid #0080FF; width: 1000px; border-radius: 4px; padding: 25px;">
<div>
HEADER;
    }
    
    function footer() {
        echo <<<FOOTER
        </div>

</body>
</html>
FOOTER;
    }
} 




?>