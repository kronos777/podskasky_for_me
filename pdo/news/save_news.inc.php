<?php
    require_once 'database.class.php';


$result = new database($pdo);
$news = $result->getNews();
echo 'Всего новостей:'.count($news);

  foreach ($news as $item) {
    $id = $item['id'];
    $title = $item['title'];
    $category = $item['category'];
    $description = nl2br($item['description']);
    $dt = date('d-m-Y H:is', $item['datetime']);
	echo <<<LABEL
	<hr>
	<h3>$title</h3>
	<p>$description<br>[$category] @ $dt</p>
	<p align="right">
	  <a href="news.php?del=$id">delete</a>
	</p>
LABEL;
  }