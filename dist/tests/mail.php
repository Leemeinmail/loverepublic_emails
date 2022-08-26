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
					<option value='mail-8' >ОМНИ Заказ собран и готов к выдаче неполный.</option>
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
  