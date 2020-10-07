<!DOCTYPE html>
<head>
</head>
<body>
<style>
 span{color:red}
</style>
<span>Dane użytkownika</span>
<br>
<?php
echo 'Imie: Kacper<br>';
echo 'Nazwisko: ';
include './surname.php';
echo '<hr>'
?>
</body>
</html>