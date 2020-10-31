<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
table{
     width: 500px;
     height: 100px;
     margin: auto;
     border: 2px ridge;
}
.baner{
    font-weight: 900;
}
    </style>
</head>
<body>
    <table>
    <tr><td><div class="baner">Kalkulator</div></td></tr>
    <form method="POST">
    <tr>
    <td><input type="number" value="x" placeholder="x" pattern="[0-9]"></td>
    <td>
    <select name="sign">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
    </select>
    </td>
    <td><input type="number" value="y" placeholder="y" pattern="[0-9]"></td>
    <td><input type="submit" namo="submit" value="="> </td>
    <td><input type="number"  name="result" value= "<?php if(isset ($result)){echo $result;}?>"disabled></td>
    </tr>
    </form>
    </table>

<?php
    require_once './function.php';

    if(isset($_POST['submit'])) 
	{

    if(is_numeric($_POST['x']) && is_numeric($_POST['y'])) 
    {

    $x=$_POST['x'];
    $y=$_POST['y'];
    
    switch($_POST['sign']){
        
        case'add':
            $result = add($x, $y);
    break;

        case'sub':
            $result = sub($x, $y);
    break;

        case'mul':
            $result = mul($x, $y);
    break;

        case'div':
            $result = div($x, $y);
    break;

    default:
            $result = "No option";
	break;
    }
  }  
}
    
?>
 



</body>
</html>