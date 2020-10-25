<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$important=[empty($_POST['First']), empty($_POST['Last']), 
empty($_POST['Address1']), empty($_POST['Address2']), 
empty($_POST['City']), empty($_POST['ZIP']),
empty($_POST['Phone']) ];

if(in_array(true, $important)){
?>
<h4>Nie wypełniłeś wymaganych pól</h4>
<button onclick="goBack()">Powró do formularza</button>

<script>
function goBack() {
  window.history.back();
}
</script>

<?php
}

else{

switch($_POST['account']){
    case'PER':
    $ACC='Personal Account';   
    break;

    case'BUS':
    $ACC='Business Account';
    break;
}

 $name=$_POST['First'];
 $surname=$_POST['Last'];

 $country=$_POST['country'];
 switch ($country){
     case'p':
         $country='Polska';
     break;

     case'u':
         $country='USA';
     break;

     case'g':
         $country='Grecja';
     break;
 }

 $A1=$_POST['Address1'];
 $A2=$_POST['Address2'];

 $city=$_POST['City'];
 $ZIP=$_POST['ZIP'];

 $state=$_POST['Province'];
 switch ($state){
     case'w':
         $country='Wielkopolskie';
     break;

     case'z':
         $country='Zachodniopomorskie';
     break;

     case'm':
         $country='Małopolskie';
     break;
 }

 $tel=$_POST['Phone'];

        $name2=ucwords(strtolower(trim("$name")));
        $surname2=ucwords(strtolower(trim("$surname")));       

        echo<<<DATA
        <h4>Dane użytkownika</h4>
        Account Type: $ACC<br>
        First name and Last name: $name2 $surname2 <br>
        Coutry: $country <br>
        Adrress 1: $A1<br>
        Adrress 2: $A2<br>
        Postal Code and City: $ZIP $city <br>
        State: $state <br>
        Phone Number: $tel<br>
    DATA;
    }        
?>
</body>
</html>