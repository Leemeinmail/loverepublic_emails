<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Отправка писем</title>

<style>
* {
	margin: 0; padding: 0;
	box-sizing: border-box;
}

html, body{
	height: 100%;
	font-family: 'Arial';
}

body{
	display: flex;
	justify-content: center;
	align-items: center;
}

.container{
	flex:0 0 600px;
	margin: 0 auto;
	border: 1px solid #000;
}

.title{
	padding: 20px 0;
	text-align: center;
	border-bottom: 1px solid #000;
	font-weight: 600;
	text-transform: uppercase;
}

.form{
	padding: 15px 10px;
}

.form p {
	display: block;
	margin-bottom: 30px;
}

.form label {
	display: block;
	margin-bottom: 10px;
	font-size: 16px;
}

.form input{
	display: block;
	padding: 6px 8px;
	width: 100%;

	font-family: 'Arial';
	font-size: 16px;
	outline: none;
}
</style>

</head>
<body>

	<div class='container' >
		<div class='title' >
			Отправка тестовых писем
		</div>
		<form class='form' method='post' action='#' >
			<p>
				<label>Почтовые ящики через запятую (,)</label>
				<input type='text' name='emails' required>
			</p>

			<p>
				<label>Какие письма отправить</label>
				<select multiple name='templates[]' required>
					<option value='omni_zakaz_oformlen_s_oplatoj' >ОМНИ Заказ оформлен с оплатой</option>
					<option value='omni_zakaz_oformlen_oplata_pri_poluchenii' >ОМНИ Заказ оформлен оплата при получении</option>
					<option value='omni_zakaz_oformlen_bez_oplaty' >ОМНИ_Заказ оформлен_БЕЗ ОПЛАТЫ</option>
					<option value='omni_zakaz_oformlen_bez_oplaty_napominanie' >ОМНИ_Заказ оформлен_БЕЗ ОПЛАТЫ_НАПОМИНАНИЕ</option>
					<option value='omni_zakaz_oformlen_bez_oplaty_oplata' >ОМНИ_Заказ оформлен_БЕЗ ОПЛАТЫ_ОПЛАТА</option>
					<option value='omni_zakaz_oformlen_bez_oplaty_otmena' >ОМНИ_Заказ оформлен_БЕЗ ОПЛАТЫ_Отмена</option>
					<option value='omni_zakaz_sobran_i_gotov_k_vydache' >ОМНИ_Заказ собран и готов к выдаче</option>
					<option value='omni_zakaz_sobran_i_gotov_k_vydache_nepolnyj' >ОМНИ Заказ собран и готов к выдаче неполный.</option>
					<option value='onlajn_zakaz_dostavlen' >ОМНИ_Заказ доставлен. Спасибо за покупку</option>

					<option value='onlajn_zakaz_oformlen_s_oplatoj' >Онлайн_Заказ оформлен_с оплатой.</option>
					<option value='onlajn_zakaz_sobran_i_gotov_k_vydache' >Онлайн_Заказ собран и готов к выдаче.</option>
					<option value='onlajn_zakaz_sobran_i_gotov_k_vydache_nepolnyj' >Онлайн_Заказ собран и готов к выдаче_неполный.</option>
					<option value='onlajn_zakaz_dostavlen_spasibo_za_pokupku' >Онлайн_Заказ доставлен. Спасибо за покупку</option>
					<option value='onlajn_zakaz_otmenen' >Онлайн_Заказ отменен</option>
					<option value='onlajn_zakaz_oformlen_bez_oplaty' >Онлайн_Заказ оформлен_БЕЗ ОПЛАТЫ</option>
					<option value='onlajn_zakaz_oformlen_bez_oplaty_napominanie' >Онлайн_Заказ оформлен_БЕЗ ОПЛАТЫ_НАПОМИНАНИЕ</option>
					<option value='onlajn_zakaz_oformlen_bez_oplaty_oplata' >Онлайн_Заказ оформлен_БЕЗ ОПЛАТЫ_ОПЛАТА</option>
					<option value='onlajn_zakaz_oformlen_bez_oplaty_otmena' >Онлайн_Заказ оформлен_БЕЗ ОПЛАТЫ_Отмена</option>
					<option value='onlajn_zakaz_gotov_k_vydache' >Онлайн_Заказ готов к выдаче</option>
					<option value='onlajn_zakaz_dostavlen' >Онлайн_Заказ доставлен</option>
					<option value='sertificat' >Сертификат</option>
				</select>
			</p>

			<p>
				<button type='submit' >
					Отправить
				</button>
			</p>
		</form>
	</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
	document.querySelector('.form').addEventListener('submit', function(evt){
		evt.preventDefault();
		
		let form_data = new FormData(this);

		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4){
		        alert('отправлено');
		    }
		};
		xhr.open('POST', '/tests/send.php');
		xhr.send(form_data);
	});
});
</script>

</body>
</html>
  