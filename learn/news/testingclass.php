<?php

 
 
 class db {
 
        function __construct() {
		 
         $this->pdo = new PDO('mysql:host=localhost;dbname=cs_first', 'root', '');

		}	
    
 }
 //new PDO('mysql:host='. $host.';dbname='.'cs_first', 'root', '');
 
 
 
 
 
 
 
 class test extends db
    {
     
        public $pdo;
		
        
        
        function __construct() {
		 parent::__construct();
         //$this->pdo = $pdo;
         //$this->pdo = new PDO('mysql:host='. $host .';dbname='. 'cs_first', 'root', '');

		}
        	
	    function __destruct() {
	       echo '<h5>класс прекратил работу</h5>';
	    }
    
         function db2Arr ($data) {//прогоняем результат через функцию
           $arr = array();
            while($row = $data->fetch(PDO::FETCH_ASSOC))
            $arr[] = $row;
            return $arr;
        }

	    function clearInt($data) {
          return abs((int) $data);
         }


         function clearStr($data) {
          $data = trim(strip_tags($data));
		  return $data;
        }

        public function ecr () {
            $string = 'NBaatioonal ur<br><script>$(document).ready(function() {});</script> slugba';
              print "Неэкранированная строка: $string\n";
              print "Экранированная строка: " . $this->pdo->quote($string) . "\n";
        }


        function getNews () {
            $smtp = $this->pdo->prepare('SELECT name FROM products;');
            //$smtp = $pdo->prepare('SELECT snl FROM fio GROUP BY snl ORDER BY snl;');
            $smtp->execute();
            $data = $smtp->fetchAll();

            foreach ($data as $name) {
              $name = $name['name'];
  
  echo <<<HTML
  
  <table class="table table-striped" id="mytab">
    <tr>
      <td>$name</td>
	</tr>
  </table>
HTML;
}

			 }
             
             
             function contact () {
                $smtp = $this->pdo->prepare('SELECT id, name, tel, address, opisanie 
                                             FROM addbook
                                             ORDER BY id DESC
                                             LIMIT 5
                                             ');
                $smtp->execute();
                $data = $smtp->fetchAll();
                  
                 
                 foreach ($data as $con) {
                       $name = $con['name'];
                       $tel = $con['tel'];
                       $address = $con['address'];
                       $opisanie = $con['opisanie'];
                       
                       echo <<<CON
                         <table class="table table-bordered">

    <tr>
      <td>$name</td>
      <td>$tel</td>
      <td>$address</td>
      <td>$opisanie</td>
	</tr>
  </table>
CON;
                  }
             }
			 
              function endcontact () {
                $smtp = $this->pdo->prepare('SELECT id, name, tel, address, opisanie 
                                             FROM addbook
                                             ORDER BY id DESC
                                             LIMIT 1
                                             ');
                $smtp->execute();
                $data = $smtp->fetchAll();
                  
                 
                 foreach ($data as $con) {
                       $name = $con['name'];
                       $tel = $con['tel'];
                       $address = $con['address'];
                       $opisanie = $con['opisanie'];
                       
                       echo <<<CON
                         <table class="table table-bordered">

    <tr>
      <td>$name</td>
      <td>$tel</td>
      <td>$address</td>
      <td>$opisanie</td>
	</tr>
  </table>
CON;
                  }
             }
             
             
             function szap1 () {
                $sql = "
                        SELECT addbook.id AS id, addbook.name AS friend, addbook.tel AS mobile, msgs.title AS zagolovok
                        FROM addbook
                        JOIN msgs
                        WHERE addbook.id = msgs.category
                        ORDER BY id
                        LIMIT 0 , 50
                ";
                $smtp = $this->pdo->prepare($sql);
                $smtp->execute();
                $d = $smtp->fetchAll();
                
                  foreach ($d as $row) {
                      $id = $row['id'];
                      $friend = $row['friend'];
                      $mobile = $row['mobile'];
                      $zagolovok = $row['zagolovok'];
                      
                      echo <<<ZAP
                         <table class="table table-bordered">

    <tr>
      <td>$id</td>
      <td>$friend</td>
      <td>$mobile</td>
      <td>$zagolovok</td>
	</tr>
  </table>
ZAP;
                  }
             }
             
             public static function hr () {
                echo '<br><hr><pre>';
             }
             
             
             
             function addbook ($n, $t, $a, $o) {
    try	  {
	      $sql = "INSERT INTO addbook
                (name, tel, address, opisanie) VALUES
                ('$n', '$t', '$a', '$o')";
          //$this->pdo->quote($sql);
		  $res = $this->pdo->exec($sql);
		  
		  if(!$res)
			  throw new Exception ($this->pdo->lastErrorMsg());
		  return true;
		} catch(Exception $e) {
             //$e->getMessage();
			 return false;
		}
                
                
                
                
             }

        }
/*
$obj = new test;
$obj->contact();*/