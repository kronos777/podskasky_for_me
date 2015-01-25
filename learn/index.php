<!doctype html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/bootstrap.js"></script> 

  <meta charset="utf-8">
  <title>Учеба и работа!!!</title>
  <style>
  body {
    font-size: 12px;
    font-family: Arial;
  }
  </style>

</head>
<body>
 
  <div class="container" style="background-color: white;">
     <div class="row" id="header">
       <div class="span12">header</div>
	 </div>
	 
     <div class="row" id="content">
	 

	   <div class="navbar">
         <div class="navbar-inner">
           <a class="brand" href="#">PDO::fetch();</a>
             <ul class="nav">
			   <li class="divider-vertical"></li>
               <li class="active"><a href="#">Главная</a></li>
               <li class="divider-vertical"></li>
               <li><a href="/news">новости</a></li>
               <li><a href="/sql">sql query</a></li>
			   <li class="divider-vertical"></li>
               <li><a href="/exam">тесты</a></li>
			   <li class="divider-vertical"></li>
			   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a></p>
                          <ul class="dropdown-menu">
                            <li><a href="#">Действие</a></li>
                            <li><a href="#">Другое действие</a></li>
                            <li><a href="#">Еще что-нибудь</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Заголовок навигации</li>
                            <li><a href="#">Отделенный пункт</a></li>
                            <li><a href="#">Еще один отделенный пункт</a></li>
                          </ul>
                </li>
             </ul> 
          </div>
        </div>
	 
       <div class="span3" id="menu">
	     <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; width: 220px;">
           <li><a tabindex="-1" href="#">Действие</a></li>
           <li><a tabindex="-1" href="#">Другое действие</a></li>
           <li><a tabindex="-1" href="#">Другое действие</a></li>
           <li><a tabindex="-1" href="#">Другое действие</a></li>
		   <li class="dropdown-submenu">
             <a tabindex="-1" href="#">Другие опции</a>
               <ul class="dropdown-menu">
                 <li><a href="#">Действие</a></li>
                  <li><a href="#">Другое действие</a></li>
                 <li><a href="#">Другое действие</a></li>
                 <li><a href="#">Другое действие</a></li>
             </ul>
			</li> 
           <li><a tabindex="-1" href="#">Отделенный пункт</a></li>
         </ul>
	   
	   
	   
	   </div>
       <div class="span9" id="text">
<!--<pre class="prettyprint linenums">-->

	 <?php
$host = 'localhost'; //HOST NAME.
$db_name = 'cs_first'; //Database Name
$db_username = 'root'; //Database Username
$db_password = ''; //Database Password



$pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
/*
$sql = "UPDATE msgs SET source='Иван рад' WHERE id=1";
$res = $pdo->exec($sql);

$smtp = $pdo->prepare('SELECT * FROM msgs ORDER BY id LIMIT 0, 5');//ORDER BY RAND()

$smtp->execute();

$data = $smtp->fetchAll();


  foreach ($data as $item) {
    $id = $item['id'];
    $title = $item['title'];
    $category = $item['category'];
    $description = $item['description'];
    $source = $item['source'];
    $dt = date('d-m-Y H:is', $item['datetime']);
	echo <<<LABEL
	<table class="table table-striped" id="mytab">
	<tr>
	<td>$id</td>
	<td>$title</td>
	<td>$category</td>
	<td>$description</td>
	<td>$source</td>
	</tr>
	</table>
LABEL;
  }
*/


/*
$smtp = $pdo->prepare('SELECT DISTINCT id, snl, putdate FROM fio;');
//$smtp = $pdo->prepare('SELECT snl FROM fio GROUP BY snl ORDER BY snl;');
$smtp->execute();
$data = $smtp->fetchAll();

foreach ($data as $name) {
  $id = $name['id'];
  $fio = $name['snl'];
  $putdate = $name['putdate'];
  
  echo <<<HTML
  
  <table class="table table-striped" id="mytab">
    <tr>
      <td>$id</td>
      <td>$fio</td>
      <td>$putdate</td>
	</tr>
  </table>
HTML;
}


  */
  
  //пример вложенных запросов
  
 /* 
  $smtp = $pdo->prepare("SELECT * FROM products WHERE id_catalog = (SELECT id_catalog FROM catalogs WHERE name = 'Процессоры')");
  
  $smtp->execute();
  $data = $smtp->fetchAll();

     foreach($data as $pr) {
	    $fid = $pr['id_product'];
	    $name = $pr['name'];
	    $cat = $pr['id_catalog'];
	    

	
echo <<<HTML
  
  <table class="table table-striped" id="mytab">
    <tr>
      <td>$fid</td>
      <td>$name</td>
      <td>$cat</td>
	</tr>
  </table>
HTML;
}



$smtp = $pdo->prepare("SELECT name FROM catalogs WHERE id_catalog = (SELECT id_catalog FROM products WHERE id_product = (SELECT MAX(id_product) FROM products));");
  $smtp->execute();
  $data = $smtp->fetchAll();
  */
  /*
  
  //примеры fetch
  
$res = $pdo->query("SELECT * FROM products");
//while ($row = $res->fetch(PDO::FETCH_NUM)){  массив с числовыми ключами
//while ($row = $res->fetch(PDO::FETCH_ASSOC)){   ассоциативный массив значений, ключи - названия столбцов
//while ($row = $res->fetch(PDO::FETCH_BOTH)){   числовой и ассоциативный массив
while ($row = $res->fetch(PDO::FETCH_OBJ)){
  echo '<pre>';
  print_r($row);
  echo '</pre>';
}
*/

//примеры вложенных запросов

  //$res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog = (SELECT id_catalog FROM products LIMIT 1); ");
  //$res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog IN (SELECT id_catalog FROM products GROUP BY id_catalog) ORDER BY name;");  // IN
  //$res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog IN (1,2,3,4,5) ORDER BY name; ");  // IN
  /*$res = $pdo->query("SELECT name FROM catalogs 
WHERE id_catalog NOT IN (SELECT DISTINCT id_catalog 
                         FROM products WHERE id_catalog < 3) 
ORDER BY name;"); */ // NOT IN
//$res = $pdo->query("SELECT id_catalog, name FROM catalogs WHERE id_catalog > ANY (SELECT id_catalog FROM products);"); // ANY или
//$res = $pdo->query("SELECT * FROM catalogs WHERE id_catalog >= ALL (SELECT id_catalog FROM products GROUP BY id_catalog); "); // ALL И
/*$res = $pdo->query("SELECT id_catalog, COUNT(id_catalog) AS total 
FROM products 
GROUP BY id_catalog 
HAVING total > 1 
ORDER BY id_catalog; 
");*/ // HAVING
  
  
  /*$res = $pdo->query("SELECT 
  products.id_product AS id_product, 
  products.name AS product, 
  catalogs.name AS catalog 
FROM 
  catalogs JOIN products 
USING(id_catalog);");*/// join
  $res = $pdo->query("SELECT 
  catalogs.id_catalog AS id_catalog, 
  catalogs.name AS catalog, 
  COUNT(products.id_product) AS total 
FROM 
  catalogs JOIN products 
USING(id_catalog) 
GROUP BY catalogs.id_catalog; ");
  
  while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>';
     print_r($row);
    echo '</pre>';  
  }
  
  /*
  echo '<h4>';
  $g = file_get_contents('http://ya.ru');
  echo $g;
  echo '</h4>';*/
	?>
	 
	 
<!--</pre>-->
	   </div>
	 </div>
	 
	<div class="row" id="footer">
       <div class="span12"></div>
	   

	   
	   
	 </div>
  </div>
</body>
</html>