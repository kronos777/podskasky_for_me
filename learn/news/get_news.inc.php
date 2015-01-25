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
	<table class="table table-bordered">
	<tr> 
	<td>$title</td>
	<td><p>$description<br>[$category] @ $dt</p></td>
	<td><p align="right">
	  <a href="news.php?del=$id">delete</a>
	</p>
	</td>
	</tr>
	</table>
LABEL;
  }
  


?>