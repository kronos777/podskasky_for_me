<?php

 
 
try {
  $dbh = new PDO('mysql:host='. $host .';dbname='. 'cs_first', 'root', '');
  echo "Подключились\n";
} catch (Exception $e) {
  die("Не удалось подключиться: " . $e->getMessage());
}

try {  
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $dbh->beginTransaction();
  $sql = "insert into fio (id, snl, putdate) values (9, 'Roman Golubev', '1982-10-08')";
  $dbh->quote($sql);
  $dbh->exec($sql);
  //$dbh->exec("delete from fio where id = 0");
  //$dbh->exec("delete from fio where snl = 'Joe german smith'");
  $dbh->commit();
  echo "<br>Ровно все $sql\n";
} catch (Exception $e) {
  $dbh->rollBack();
  echo "Ошибка: " . $e->getMessage();
}