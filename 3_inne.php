<!DOCTYPE html>
<head>
</head>
<body>
<?php
 
################################################################
/*
preinkermentacja ++$x
predekermentacja --$x
postinkermentacja $x++
postdekermentacja  $x--

*/ 
 
 $x=5;
 $x=$x++;
 echo $x; //5
 $x=++$x; 
 echo $x; //6
 $y=$x++;
 echo $x; //7
 echo $y; //6
 $y=++$x *2 -1;
 echo $x; //8
 echo "$y<hr>"; //15
 
 //zadanie
 
 $x=2;
 echo $x++; //2
 echo ++$x; //4
 echo $x; //4
 $y=$x++;
 echo $y; //4
 $y=++$x;
 echo $y; //6
 echo ++$y; //7
 

//operatory rzutowanie
// bool, int, floot, string, array, object, unset

$text='123abc';
$text1=0;
$text2=20;

echo '<br> Typ danych $text:', gettype($text), '<hr>';
$x=(int)$text;
echo $x;
echo '<br> Typ danych $text:', gettype($x), '<hr>';

$x=(bool)$text1;
echo $x; //false
echo '<br> Typ danych $text:', gettype($x), '<hr>';

$x=(unset)$text2;
echo $x;
echo '<br> Typ danych $text:', gettype($x), '<hr>';

//roxzmiar type intyger
echo PHP_INT_SIZE; //8

// kontrola typu zmienych
$w;
echo @$w;
//operator ignoroawani blędów = @
echo @gettype($w); //NULL




?>
</body>
</html>