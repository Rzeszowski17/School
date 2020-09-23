<?php
//wersja PHP 7.4.9
echo PHP_VERSION, '<br>';
//echo phpinfo();

$pow=2**8; //Potęga
echo $pow;

echo'<br>';

echo 'a', 'b', 'c'; //abc
echo '<br>';
echo 'a'. 'b'. 'c';//a+b+c=>abc

//operatory bitowe
// and &, or |, xor ^, not ~, przesunięcie bitowe w lewo <<, przesunięcie bitowe w prawo >>
$x=0b1010; // "0b" -> oznacza jaki system
echo"<hr>$x<br>";

$x=$x<<2; //101000(2) => 8+32=40
echo "$x<br>";

$x = $x >> 1; //10100(2) => 4+16=20
echo "$x<br>";

echo '<hr>';

//porównanie <=>
$x=10;
$y=20.1;
echo $x<=>$y;
$result = $x<=>$y;
echo $result;


if($x==$y) { //Jak if w c++
  echo 'zmienne są równe<br>';
}else{
  echo 'zmienne są różne<br>';
}

echo gettype($x); //intiger ->pokazuje typ zmiennej 
echo '<br>';
echo gettype($y); //double

echo '<hr>';

/*preinkrementacja ++$x
predekrementacja --$x
postinkrementacja $x++
postdekrementacja $x--
*/
$x=1;
$x=$x++; //najpierw wyświetla potem dodaje
echo $x; //1 
$x=++$x; //najpierw dodaje potem wyświetla
echo $x; //2 
$y=$x++; // wartosc y to x przed dodaniem, a potem sie x
echo $x; //3 
echo $y; //2 
$y=++$x*2-1; //wyświetka powiekszonex, wyswietla y po zrobieni działania 
echo $x; //4
echo $y; //7

echo '<hr>';

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++;
echo $y; //4
$y=++$x;
echo $y; //6
echo ++$y; //7

echo '<hr>';

//operatory rzutowania
//bool, int, float, string, array, object, unset

$test='123abc';
$test1=0;
$test2=20;

echo 'typ danych $test ', gettype($test);
$x=(int)$test;
echo "<hr>$x<br>";
echo 'typ danych $x ', gettype($x);

$x=(bool)$test1;
echo "<hr>$x<br>";
echo 'typ danych $x ', gettype($x);

?>