<?php
if(isset($_GET['del']))
  include 'delete_news.inc.php'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Новостная лента</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="/.js/highslide/highslide-with-html.js"></script>
<script src="/.js/highslide/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="http://miep.ru/.js/highslide/highslide.css" />
</head>
<body>
<style>
input[type=text], textarea {
outline: none;
padding: 5px;
margin: 5px;
border: 1px solid #DDDDDD;
}
input[type=text]:focus, textarea:focus {
border-color:#56b4ef;
box-shadow:inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);
-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);
-moz-box-shadow:inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);
}

</style>
<script>
$(function() {
$( "#accordion" ).accordion({
collapsible: true, heightStyle: "content", active: 0,
});
});
</script>

<?php
 
?>

<div id="accordion">
<h3>Добавить</h3>
<div>
<p>
<form action="get_news.inc.php" method="post">

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
<input type="submit" value="Добавить!" />

</form>

</p>
</div>

<h1>Последние новости</h1>
<?php
require_once 'save_news.inc.php';
?>

</body>
</html>