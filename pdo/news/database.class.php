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
          $res = $this->pdo->exec($sql);
		  
		  if(!$res)
			  throw new Exception ($this->pdo->lastErrorMsg());
		  return true;
		} catch(Exception $e) {
             //$e->getMessage();
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
                    ORDER BY msgs.id DESC";
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

}



