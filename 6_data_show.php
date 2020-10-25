<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h4>Dane użytkownika</h4>
<?php
   // echo  '<pre>', print_r($_GET),'</pre>'
    $pass=$_GET['pass'];
    $color=$_GET['color'];
    switch ($color){
        case'r':
            $color='czerwony';
        break;

        case'g':
            $color='zielony';
        break;

        case'b':
            $color='niebieski';
        break;
    }
    if(isset($_GET['regulamin'])){
        $reg='Zaznaczono regulamin';
    }
    else{
        $reg='Nie zaznaczono regulamin';
    }
    echo<<<DATA
    Login: $_GET[login]<br>
    Hasło: {$_GET['pass']}<br>
    Hasło: $pass<br>
    Kolor: $color<br>
    $reg
DATA;
?>
</body>
</html>