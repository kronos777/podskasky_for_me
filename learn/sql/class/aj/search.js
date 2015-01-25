/*
* 
*/
/*google.load("jquery", "1.3.1");
google.setOnLoadCallback(function()
{
	// Вставляем CSS3 и задаем для результатов поиска тени
	var cssObj = { 'box-shadow' : '#888 5px 10px 10px', 
		'-webkit-box-shadow' : '#888 5px 10px 10px', // Safari
		'-moz-box-shadow' : '#888 5px 10px 10px'}; // Firefox 3.5+
	$("#suggestions").css(cssObj);
	
	// Отключаем поле предложений
	 $("input").blur(function(){
	 	$('#suggestions').fadeOut();
	 });
});
*/
function lookup(inputString) {
	if(inputString.length == 0) {
		$('#suggestions').fadeOut(); // Скрываем поле предложений
	} else {
		$.post("rpc.php", {queryString: ""+inputString+""}, function(data) { // Выполняем запрос AJAX
			$('#suggestions').fadeIn(); // Выводим поле предложений
			$('#suggestions').html(data); // Заполняем поле предложений
		});
	}
}