
<!doctype html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/style.css" rel="stylesheet">
<script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/bootstrap.js"></script> 
<script src="search.js"></script> 
    <title>serch!!!</title>
  
</head>
<body style="margin: 25px auto; border: 1px solid #0080FF; width: 1000px; border-radius: 4px; padding: 25px;">
<div>
	<form id="searchform">
		<div>
			<legend>Форма поиска</legend>
  <input type="text" placeholder="введите текст…" id="inputString" onkeyup="lookup(this.value);" >
		</div>
		<div id="suggestions"> </div>
	</form>
 
</div>

</body>
</html>
