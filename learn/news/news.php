<?php
if(isset($_GET['del']))
  include 'delete_news.inc.php'
?>

<!doctype html>
<html lang="en">
<head>
	<title>Новостная лента</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<script src="../js/bootstrap.js"></script> 

    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	 <script>
$(function() {
$( "#tabs" ).tabs({
collapsible: true, active: 3,
}); 
});
</script>
 <script>
$(function() {
$( "#accordion" ).accordion({
    heightStyle: "content",
    active: 5,
    collapsible: true,
});
});
</script>
</head>
<body>
<div id="container">

<div id="accordion">
<h3>Добавление новости</h3>
<div>
<p>

<div id="tabs">
<ul >
<li><a href="#tabs-1">Добавить новость</a></li>
<li><a href="#tabs-2">Добавить товар</a></li>
<li><a href="#tabs-3">Добавить контакт</a></li>
</ul>
<div id="tabs-1">
<p>

<div>
<h3>Добавить</h3>
<div>
<p>
<form action="save_news.inc.php" method="post">

Заголовок новости:<br />
<input type="text" name="title" /><br />
Выберите категорию:<br />
<select name="category">
<option value="1">Политика</option>
<option value="2">Культура</option>
<option value="3">Спорт</option>
</select>
<br />
Текст новости:<br />
<textarea name="description" cols="50" rows="5"></textarea><br />
Источник:<br />
<input type="text" name="source" /><br />
<br />
<input type="submit" class="btn btn-primary" value="Добавить!" />

</form>

</p>
</div>
</div>

</p>
</div>
<div id="tabs-2">
<p>

<form action="save_tov.inc.php" method="post">

Название:<br />
<input type="text" name="name" /><br />
Выберите категорию:<br />
<select name="id_category">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br />
<input type="submit" class="btn btn-danger" value="Добавить!" />

</form>

</p>
</div>
<div id="tabs-3">
<p>
<?php 
  require_once 'form_add_book.php';
?>

</p>
</div>
</div>

</p>
</div>
<h3>Просмотр новостей</h3>
<div>
<p>

<table class="table table-bordered">
<tr>
<td>
<h1>Последние новости</h1>
  <?php
    require_once 'get_news.inc.php';
  ?>
</td>
<td>
<? require_once 'get_hui.inc.php'; ?>
</td>
<tr>
</table>

</p>
</div>
<h3>Аякс и jquery</h3>
<div>
<p>
<?php
  require_once 'ajax.php'
?>
</p>

</div>
<h3>SQL запросы</h3>
<div>
<p>
<script>
$(document).ready(function () {
    //$.post('./sql_match.php', {}, function(data){ $('#sql_match').html(data); })
});
</script>
    <ul class="thumbnails">
    <li class="span4">
    <a href="#" class="thumbnail"  id="sql_match">
     
    </a>
    </li>
    <li class="span4">
    <a href="#" class="thumbnail" >
     <?php
       $file = file_get_contents('sql.ex');
       //print_r($file);
       $sql = "INSERT INTO msgs (description) VALUES ('$file')";
       $db = new test;
       $db->pdo->exec($sql);
     ?>
    </a>
    </li>
    </ul>



</p>
</div>
</div>








</div>
</body>
</html>