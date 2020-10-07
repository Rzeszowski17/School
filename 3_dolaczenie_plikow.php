<!DOCTYPE html>
<head>
</head>
<body>
Początek plik
<hr>
<?php //Dołączenie plik php

	echo '<br>include<br>';
	include './Do_3.php'; // wyswirtla dalsza czesc strony pomimo bledu
	include_once './Do_3.php'; //powoduje ze plik wiecej razy sie nie otworzy
	echo '<br>';
	echo '<br>require<br>';
	require './Do_3.php'; // powoduje fatal error i nie wyswietla dalszej czesci strony
	require_once './Do_3.php';
?>
<hr>
Koniec pliku
</body>
</html>
