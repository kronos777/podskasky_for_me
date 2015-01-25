<?php
   require_once 'conf.php';
    require_once 'database.class.php';
    $db = new database($pdo);
    $rows = $db->getData();
    //$rows = $db->saveNews('Hui wsem wam', 1, 'Masssertyut', 'Setteer');
?>
