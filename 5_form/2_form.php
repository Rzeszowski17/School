<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Dane użytkownicy</h4>
<form action="./2_form_dane.php" method="post" novalidate>
<input type="text" name="surname" placeholder="Nazwisko"
autofocus autocomplete="off" requried pattern="[a-ząśężźćńół]{}"><br><br> <!--^[A-ZŻŹŚĆĄĘÓ][a-zżźśćąęó]{1,}$-->
<select name="gender">
<option hidden disabled selected>Wybierz opcję</option>
<option value="m"> Mężczyzna</option>
<option value="f">Kobieta</option>
</select><br><br>
<!--<option value="f" selested>Kobieta</option>-->
<input type="submit" value="Wyslij dane">
</form>
</body>
</html>