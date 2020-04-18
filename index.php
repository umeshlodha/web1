<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>JavaScript Currency Converter | Webdevtrick.com</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
	<div class="currency">
		<select id="from_currency">
			<option value="USD" selected>USD</option>
                                                      <option value="INR">INR</option>
		</select>
		<input type="number" id="from_ammount" placeholder="0" value=1 />
	</div>
	<div class="middle">
		<button id="exchange">
			<i class="fas fa-exchange-alt"></i>
		</button>
		<div class="rate" id="rate"></div>
	</div>
	<div class="currency">
		<select id="to_currency"><
			<option value="INR" selected>INR</option>
                                                      <option value="USD">USD</option>
		</select>
		<input type="number" id="to_ammount" placeholder="0" />
	</div>
</div>
  <script  src="function.js"></script>

</body>
</html>
