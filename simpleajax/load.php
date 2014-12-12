<?php
$host = 'localhost'; //HOST NAME.
$db_name = 'cs_first'; //Database Name
$db_username = 'root'; //Database Username
$db_password = ''; //Database Password


//$conn = mysql_connect('localhost', 'root', '', 'cs_first');
$pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
$smtp = $pdo->prepare('SELECT * FROM msgs');

$smtp->execute();

 //print_r($smtp->fetchAll());
 
 
$data = $smtp->fetchAll()[0];

$holder = $data[0];
$holder .= $data['title'];
$holder .= $data['description'];

echo '<pre>'.$holder;
?>