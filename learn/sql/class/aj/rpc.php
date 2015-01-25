<?php

/**
 * @author admin
 * @copyright 2015
 */

	// Реализация PHP5 - используем MySQLi.
	// mysqli('localhost', 'имя_пользователя', 'пароль', 'база_данных');
	$db = new mysqli('localhost', 'root', '', 'cs_first');
	
	if(!$db) {
		// Выводим сообщение об ошибке
		echo 'Ошибка: Нет соединения с базой данных.';
	} else {
	
		$query = $db->query("SET character_set_connection=utf8");
		$query = $db->query("SET character_set_client=utf8");
		$query = $db->query("SET character_set_results=utf8");
		$query = $db->query("SET NAMES utf8");
		
		// Есть переданная строка запроса?
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			// Строка запроса имеет длину больше, чем 0?
			if(strlen($queryString) >0) {
				//$query = $db->query("SELECT * FROM news s INNER JOIN products c ON s.id = c.id_product WHERE title LIKE '%" . $queryString . "%' ORDER BY id LIMIT 8");// много лишнего
				$query = $db->query("SELECT * FROM news WHERE title LIKE '%" . $queryString . "%' ORDER BY id LIMIT 8");
                
				if($query) {
					// Пока есть результат запроса, обрабатываем его.
					
					// Сохраняем ID категории
					$catid = 0;
					while ($result = $query ->fetch_object()) {
						if($result->id != $catid) { // Проверяем, изменилась ли категория
							echo '<table class="table table-bordered table-hover"><tr>';
                            echo '<td>'.$result->title.'</td>';
							$catid = $result->id;
						}

	         			$name = $result->text;
	         			if(mb_strlen($name,'UTF-8') > 250) { 
	         				$name = mb_substr($name, 0, 250, 'UTF-8');
							$name .= "...";
	         			}	         			
	         			echo '<td>'.$name.'</td>';
        			
                            echo '<td><a href="get_news_id.php?'.$catid.'">полностью</td>';
	         		}
                    echo '</table></tr>';
                    
				} else {
					echo 'Ошибка: Есть проблемы с запросом.';
				}
			} else {
				// Ничего не делаем
			} 
		} else {
			echo 'Должно быть, у вас нет доступа к данному скрипту!';
		}
	}
?>