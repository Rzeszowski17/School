<!DOCTYPE html>
<head>
</head>
<body>
<?php
	$text = <<< T
	zsl - Zespół Szkół Łączności 
T;
	echo $text;
	echo nl2br($text);  //karzdy enter pomiedzy słowami jest traktowany jako <br>
	
	$name = 'jaNUsZ';
//zamiana na małe literyh 
	$name = strtolower($name);
	echo $name;
	echo"<hr>";
	$name = 'jaNUsZ';
	//zmiana na duże literyh
	echo strtoupper($name);
	echo"<hr>";
	//zmiania pierwszej litery na duża
	$name = 'aNNa noWak z poznania';
	echo ucfirst($name);
	echo"<hr>";
	//zmiania pierwszej litery na duża
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
	$col = wordwrap($lorem, 40, '<br>');
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
	$name1="   Anna";
	echo 'Dlugość $name', strlen($name); //4
	echo"<hr>";
	echo 'Dlugość $name', strlen($name1); //7
	echo"<hr>";
	echo strlen(ltrim($name1)); //5
	echo"<hr>";
	echo strlen(trim($name1)); //4
	
	echo"<hr>";
	echo strlen($name1);
	$name1=trim($name1);
	echo strlen($name1);
	echo"<hr>";
	//przeszukiwanie ciągów znaków
	$address = "Poznań, ul. Polna 2, tel (61)123-34-67";
	$search = strstr($address,'tel', true);
	echo "<br>$search<br>";
	
	echo"<hr>";
	$address = "Poznań, ul. Polna 2, tel (61)123-34-67";
	$search = stristr($address,'Tel');
	echo "<br>$search<br>";
	
	echo"<hr>";
	echo strstr('zsl@gmail.com', '@'); //@gmail.com
	echo"<hr>";
	echo strstr('zsl@gmail.com', 64); //@gmail.com
	
	//$domain = substr(strstr('zsl@gamil.com'), '@'), 0);
	
	
	
	
	
?>
</body>
</html>