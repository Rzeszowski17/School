<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
     margin: auto;
     border: 2px solid black;
}
.baner{
    font-weight: 900;
    font-size: 19px
}
hr{
    border: 1px solid black;
}
</style>
</head>
<body>
    <table>
    <form method="POST">
    <tr>
    <td><div class="baner">Ostroslup<div></td>
    </tr>
    <tr>
    <td><img src=ostro.jpg></td>
    </tr>
    <tr>
    <td>
    <hr>
    </td>
    </tr>
    <tr>
    <td><div class="baner">Dane<div></td>
    </tr>
    <tr>
    <td><input type="number" name="a"  placeholder="a" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="number" name="h"  placeholder="h" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td>
    <?php  
    echo ostro()
    ?>
    </td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    </form>
    </table>
    <?php

    function ostro(){
    if (isset($_POST['a'],$_POST['h'])){
         if($_POST['a']<=0 || $_POST['h']<=0){
            echo "<br><h4>Liczby podane w polach powinny być dodatnei</h4>";
        }
        else{
            require_once('./scripts/ostroslup.php');


        echo '<ul>';
        echo '<li>Pole:'. Pole_Ostro($a,$h).'cm<sup>2</sup></li>';
        echo '<li>Objętość:'.Obje_Ostro($a,$h).'cm<sup>3</sup></li>';
        echo '</ul>';


        }
    }

    }
    ?>
</body>
</html>