<?php

   require_once 'conf.php';

 class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        /*function getData()
        {

			$sql = 'SELECT * FROM msgs';
			foreach ($this->pdo->query($sql) as $row) {
              print $row['title'] . "\t";
              print $row['description'] . "\t";
              print $row['source'] . "\n";
			  echo '<br>';
          }
		}*/
		function saveNews($t, $c, $d, $s) {
	    try	  {
	      $sql = "INSERT INTO msgs (title, category, description, source) VALUES('$t', $c, '$d', '$s')";
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
	
	function saveTov($t, $c) {
	   try {
	      $sql = "INSERT INTO products (name, id_catalog) VALUES('$t', $c)";
          //$this->pdo->quote($sql);
		  $res = $this->pdo->exec($sql);
	   if(!$res)
          throw new Exception ($this->pdo->lastErrorMsg());
		return true;
	}  catch (Exception $e) {
	  $e->getMessage();
	     return false;
	}
	
	}
	
	   function db2Arr ($data) {//прогоняем результат через функцию
           $arr = array();
            while($row = $data->fetch(PDO::FETCH_ASSOC))
            $arr[] = $row;
            return $arr;
        }

        function getNews () {
            try {
			
			$sql = "SELECT msgs.id as id, title, category.name as category, description, datetime 
                    FROM msgs, category 
					WHERE category.id=msgs.category 
                    ORDER BY msgs.id DESC
                    LIMIT 6";
             $res = $this->pdo->query($sql);
             
			 
			 if(!$res)
			  throw new Exception ($this->pdo->lastErrorMsg());
			 return $this->db2Arr($res);//прогоняем результат через функцию
            }catch(Exception $e) {
             //$e->getMessage();
			 return false;
			 }
        }
	
	    function deleteNews ($id) {
		  try {
		     $sql = "DELETE FROM msgs WHERE id=$id";
             $res = $this->pdo->query($sql);
            if(!$res)
			  throw new Exception ($this->pdo->lastErrorMsg());
			return true;
		  }catch(Exception $e) {           
		  //$e->getMessage();
			 return false;
			 }

        }
		

		
		function getHui () {
            try {
			
			$sql = "SELECT name, id_catalog 
                    FROM products
					ORDER BY name DESC
					LIMIT 10
					";
             $res = $this->pdo->query($sql);
             
			 
			 if(!$res)
			  throw new Exception ($this->pdo->lastErrorMsg());
			 return $this->db2Arr($res);//прогоняем результат через функцию
            }catch(Exception $e) {
             //$e->getMessage();
			 return false;
			 }
        }

		
		public static function shopMethod() {

	
echo <<<HTML
 <h4>Тoвары нашего магазина</h4>
HTML;
}
		
}
/*
class Shop extends database {

	public static function shopMethod() {

	
echo <<<HTML
  
  <table class="table table-striped" id="mytab">
    <tr>
      <td>DDDDDD</td>
      <td>VVVVVVV</td>
      <td>CCCCCCCC</td>
	</tr>
  </table>
HTML;
}

}*/