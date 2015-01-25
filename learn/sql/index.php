<!doctype html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<script src="../js/bootstrap.js"></script> 
    <title>MYSQL BOOK!!!</title>
  
</head>
<body style="margin: 25px auto; border: 1px solid #0080FF; width: 1000px; border-radius: 4px; padding: 25px;">
<!--iframe src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/sql/class/aj/serch.php" width="1000" height="auto" frameborder="0" scrolling="no"></iframe-->

 
<?php

/**
 * @author admin
 * @copyright 2015
 */
 
function __autoload($classname) {
    $filename = "/class/". $classname .".php";
    include_once($filename);
}

// we've called a class ***
//$obj = new select1;
/*$obj->first();
select1::hr();
$obj->randomV();
*/
$obj2 = new join;
//$obj2->terra();
$obj2->terra3();		

//echo (file_exists("../index.php"))?"Существует":"Не существует";
?>
</body>
</html>