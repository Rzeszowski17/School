<!DOCTYPE html>
<head>
</head>

<!-- <form method="get"> 
<input type="text" name="surname"><br><br>
<input type="submit" value="Wyślij"><hr></a>
</form> -->
<?php
	//isset()-sprawdza czy zmienna jest zdeklarowana i jej wartość jest rózna od null. Zawartość 
	//!empty-określa czy zmienna jest pusta
	//$_GET (jest to tablica)ta zmienna odczytuje wartość opcji, jakie mam w adresie 
	if(isset($_GET['surname'])) {
		$surname=$_GET['surname'];
		echo "Nazwisko, które wprowadzileś w formularzu: $surname";
		//echo "<a href="./5_form.php">Powrótdo formularza</a>";
		echo "<a href=\"./5_form.php\">Powrótdo formularza</a>";
	}
	else{
		//echo 'Wyslij formularz';
		echo <<<FORM
		<form method="get">
		<input type="text" name="surname"><br><br>
		<input type="submit" value="Wyślij"><hr><a/>
		</form>
FORM;
	}

?>
</body>
</html> 