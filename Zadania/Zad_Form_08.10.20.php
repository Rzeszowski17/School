<!DOCTYPE html>
<head>
</head>
<body>
    <form method="get">
    Name
    <input type="text" name="name"><br><br>
    Surname
    <input type="text" name="surname"><br><br>
    <input type="submit" value="Wyślij"><hr></a>
    </form>

<?php
if(!empty($_GET['surname'])) {
    ob_clean();
    $name=$_GET['name'];
    $surname=$_GET['surname']; 
    
    $name2=ucwords(strtolower(trim("$name")));
    $surname2=ucwords(strtolower(trim("$surname")));

    echo "Imie i Nazwisko to: $name2 $surname2";
    echo "<a href=\"./Zad_form.php\"><br>Powrótdo formularza</a>";

}
else
{
    echo "Wyślij formulkarz";
}




?>
</body>
</html>