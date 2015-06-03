<html>
<head>
	<link rel="stylesheet" href="themes/caesar.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="jquery/jquery.mobile.structure-1.4.5.min.css" />
	<script src="jquery/jquery-1.11.1.min.js"></script>
	<script src="jquery/jquery.mobile-1.4.5.min.js"></script>
				
	<link rel="stylesheet" href="style.css"/>
	
</head>
<body>
<form action="" method="POST">
	<input type="text" name="text" value="{TEXT}"/>
	<select name="shift">
		<option {SHIFT_1}>1</option>
		<option {SHIFT_2}>2</option>
		<option {SHIFT_3}>3</option>
		<option {SHIFT_4}>4</option>
		<option {SHIFT_5}>5</option>
		<option {SHIFT_6}>6</option>
		<option {SHIFT_7}>7</option>
		<option {SHIFT_8}>8</option>
		<option {SHIFT_9}>9</option>
		<option {SHIFT_10}>10</option>
	</select>
	<select name="operation">
		<option {NOT_DECRYPT}>encrypt</option>
		<option {NOT_ENCRYPT}>decrypt</option>
	</select>
	<input type="submit" value="Submit"/>
	<input type="text" disabled value="github.com/alinaclaudia"/> 
</form>
</body>
</html>