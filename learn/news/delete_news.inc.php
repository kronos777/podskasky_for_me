<?php

require_once 'database.class.php';
    $del = new database($pdo);

	
		function clearInt($data) {
          return abs((int) $data);
         }

$id = clearInt($_GET['del']);

if ($id) {
  $del->deleteNews($id);
}