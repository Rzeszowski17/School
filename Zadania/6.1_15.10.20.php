<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h4>Dane użytkownika</h4>
<?php

    $sex=$_GET['sex'];
    switch ($sex){
        case'm':
            $sex='Male';
        break;

        case'f':
            $sex='Female';
        break;

    }
    
    $color=$_GET['eye'];
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

        case'b':
            $color='brązowy';
        break;
    }

    if(isset($_GET['check'])){
        $check='Over 6 feet tall';
    }
    else{
        $check='Over 200 pounds';
    }

    $abilit=$_GET['ability'];
    
    echo<<<DATA
    Name: $_GET[login] <br>
    Sex: $sex <br>
    Eye color: $color <br>
    Check: $check <br>
    Ability: $abilit <br>

DATA;
?>
</body>
</html>