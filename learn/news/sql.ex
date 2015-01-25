<?
//примеры вложенных запросов

  $res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog = (SELECT id_catalog FROM products LIMIT 1); ");
  $res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog IN (SELECT id_catalog FROM products GROUP BY id_catalog) ORDER BY name;");  // IN т.е. содержит
  $res = $pdo->query("SELECT name FROM catalogs WHERE id_catalog IN (1,2,3,4,5) ORDER BY name; ");  // IN
  $res = $pdo->query("SELECT name FROM catalogs 
WHERE id_catalog NOT IN (SELECT DISTINCT id_catalog 
                         FROM products WHERE id_catalog < 3) 
ORDER BY name;"); */ // NOT IN
$res = $pdo->query("SELECT id_catalog, name FROM catalogs WHERE id_catalog > ANY (SELECT id_catalog FROM products);"); // ANY или
$res = $pdo->query("SELECT * FROM catalogs WHERE id_catalog >= ALL (SELECT id_catalog FROM products GROUP BY id_catalog); "); // ALL И
$res = $pdo->query("SELECT id_catalog, COUNT(id_catalog) AS total 
FROM products 
GROUP BY id_catalog 
HAVING total > 1 
ORDER BY id_catalog; 
");
  
 $res = $pdo->query("SELECT 
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
  