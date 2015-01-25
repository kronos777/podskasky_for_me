<?php
 class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function getData()
        {
            /*$query = $this->pdo->prepare('SELECT * FROM msgs');
            $query->execute();*/
			$sql = 'SELECT * FROM msgs';
			foreach ($this->pdo->query($sql) as $row) {
              print $row['title'] . "\t";
              print $row['description'] . "\t";
              print $row['source'] . "\n";
			  echo '<br>';
            /*$result = $query->fetchAll();
			print_r($result);*/
          }
		}
		function saveNews($t, $c, $d, $s) {
	
	  
	    $sql = "INSERT INTO msgs (title, category, description, source) VALUES('$t', $c, '$d', '$s')";
	  
          /* Удаляем все записи из таблицы FRUIT */
        $this->pdo->exec($sql);
		
	}
	}