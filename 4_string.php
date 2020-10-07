<!DOCTYPE html>
<head>
</head>
<body>
<?php
	$text = <<< T
	zsl - Zespół 
	Szkół 
	Łączności 
T;
	echo $text;
	echo"<hr>";
	echo nl2br($text);  //karzdy enter pomiedzy słowami jest traktowany jako <br>
	echo"<hr>";
	
	$name = 'jaNUsZ';
	//zmiana na małe litery (sanityzacja kodu)
	$name = strtolower($name);
	echo $name;   //janusz
	echo"<hr>";
	
	$name = 'KrysTYna';
	//zmiana wszystkich liter literyh na duże
	echo strtoupper($name);
	echo"<hr>";
	
	//zmiania pierwszej litery na duża w pierwszym wyrazie 
	$name = 'aNNa noWak z poznania';
	echo ucfirst($name);
	echo"<hr>";
	
	//zmiania pierwszej litery na duża wszystkich wyrazów
	$name = 'aNNa noWak z poznania';
	echo ucwords($name);
	echo"<hr>";
	
	//zad.1
	//Zmien $name, bay zwracała done w następujący sposób: Anna Nowak
	$name='aNNa noWAK';
	echo ucwords(strtolower($name));
	
	echo"<hr>";
	
	//Lorem Impsum
	$lorem =<<<LOREM
	
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac lacus ut 
lacus rutrum varius nec in sapien. Vestibulum mollis lorem et ultrices vulputate. 
Curabitur arcu felis, malesuada in enim sit amet, faucibus finibus nisl. Quisque 
maximus ullamcorper nulla, eget euismod lacus molestie vitae. Nam blandit rutrum 
arcu eget lacinia. Morbi eget dolor blandit, sodales sapien sed, consequat erat. 
Donec sit amet est diam. Maecenas pulvinar nisl vitae nibh accumsan, ac porta 
nunc vestibulum.
LOREM;
	echo $lorem;
	echo"<hr>";
	$col = wordwrap($lorem, 40, '<br>'); //zawija tekst do nowje lini po 40 znakach
	echo $col;
	echo"<hr>";
	
	echo $lorem;
	$col = wordwrap($lorem, 40, '<hr>');
	echo $col;
	echo"<hr>";
	
	//czyszcznie zawartości 
	// ob_clean();
	// usuwanie białych znaków
	$name="Anna";
	$name1="   Anna ";
	echo 'Dlugość $name', strlen($name); //4 strlen wyswietka ilość znaków 
	echo"<hr>";
	echo 'Dlugość $name', strlen($name1); //8 strlen wyswietka ilość znaków rownież ze spacjami
	echo"<hr>";
	echo strlen(ltrim($name1)); //5 usuwa białe znak z lewje strony i wyswietla ile jest znaków
	echo"<hr>";
	echo strlen(rtrim($name1));//7 usuwa białe znak z prawej strony i wyswietla ile jest znaków
	echo"<hr>";
	echo strlen(trim($name1)); //4 usuwan białe znaki z obydwu stron i wyswietla ile jest znaków
	
	echo"<hr>";
	
	echo strlen($name1); //8 
	$name1=trim($name1); //  usuwa znaki z obydwu stron
	echo strlen($name1); // wyświetla liczbe znaków bez białych znaków
	echo"<hr>";
	
	//przeszukiwanie ciągów znaków
	$address="Poznań, ul. Polna 2, tel. (61)123-45-67";
	$search=strstr($address, 'tel'); //wyszukuej i wyswitla od slowa klucz w prawo 
	echo "<br>$search<br>"; //tel. (61)123-45-67
	echo"<hr>";
	
	$address = "Poznań, ul. Polna 2, tel (61)123-34-67";
	$search = strstr($address,'tel', true); //wyszukuje i wyswitla ciag zakow przed znalezionym slowe klucz
	echo "<br>$search<br>";
	
	echo"<hr>";
	$address = "Poznań, ul. Polna 2, tel (61)123-34-67";
	$search = stristr($address,'Tel'); // ignoruje wielkość liter w slowie klucz
	echo "<br>$search<br>";
	
	echo"<hr>";
	echo strstr('zsl@gmail.com', '@'); //@gmail.com wyswitla od znaku
	echo"<hr>";
	echo strstr('zsl@gmail.com', 64); //@gmail.com wyswietla od znaku w kodzie ascii
	echo"<hr>";
	
	$domain=substr(strstr('zsl@gmail.com','@'),1); // wyswietla sie bez znoku okreslonego liczba w tym przypadku bez małpy
	echo $domain; //gmail.com

	
	
	
	
	
?>
</body>
</html>