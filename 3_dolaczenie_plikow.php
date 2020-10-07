<!DOCTYPE html>
<head>
</head>
<body>
Początek plik
<hr>
<?php //Dołączenie plik php
	echo '<br>include<br>';
	include './Do_3.php';
	include_once './Do_3.php';
	echo '<br>require<br>';
	require './Do_3.php';
	require_once './Do_3.php';
?>
<hr>
Koniec pliku
</body>
</html>
