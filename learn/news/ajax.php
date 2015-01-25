<?php

/**
 * @author Ivan
 * @copyright 2015
 */

?>

<script>
$(document).ready(function(){
    
    
    var n = $('#name').val();
    var t = $('#email').val();
    var a = $('#address').val();
    var o = $('#opisanie').val();
    
  /*  if($('#name').empty()) {
        $('#emsg').html('<h4>Заполните поле бля</h4>');
    } else { $('#emsg').html('<h4>Все хорошо</h4>'); }
*/

/*$('#myform').bind('submit', function(event) {
  $('[type=text]').each(function() {
    if(!$(this).val().length) {
      event.preventDefault();
      $(this).css('border', '2px solid red');
    }
  });
});*/



   $('#send').click(function() {
    $.ajax({
   type: "POST",
   url: "form_add_book.php",
   data: ({'name': n,'tel': t, 'address': a, 'opisanie': o}),
   success: function(msg){
       
   }
   });
 });
 
 $.post('./loader_end_result.php', {}, function(data){ $('#loader').html(data); })
});
</script>
<div id="loader"> </div>
<form method="post" id="myform">
	<p class="alert alert-block">Поля со <span class="required">*</span> обязательны.</p>

	<div class="row">
		<label for="ContactForm_Имя">Имя</label>		<input type="text" id="name" name="name">		</div>

	<div class="row">
		<label class="required" for="ContactForm_email">Телефон <span class="required">*</span></label>		<input type="text" id="email" name="tel">		</div>

	<div class="row">
		<label for="ContactForm_Тема">Адресс</label>		<input type="text" id="address" name="address" maxlength="128" size="60">	</div>

	<div class="row">
		<label for="ContactForm_Сообщение">Описание</label>		<textarea id="opisanie" name="opisanie" cols="50" rows="6"></textarea>		</div>
		
	<div class="row buttons">
		<input type="submit" id="send" class="btn btn-primary" value="Отправить" >	</div>


</form>