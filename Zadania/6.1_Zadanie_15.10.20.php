<!DOCTYPE html>
<head> 
</head>
<body color="black">
<table>
<form action="./6.1_15.10.20.php" method="get">
<tr>
<td>Name</td>
<td><input type="text" name="login" placeholder="Login" autofocus></td>
</tr>
<tr>
<td>Sex</td>
<td><input type="radio" name="sex" value="m"> Male<br>
<input type="radio" name="sex" value="f"> Female</td>
</tr>
<tr>
<td>Eye color</td>
<td><select name="eye">
<option>Blue</option>
<option>Green</option>
<option>Brown</option>
<option>Grey</option>
</select></td>
</tr>
<tr>
<td>Check all that apply</td>
<td><input type='checkbox' name="check" value=""> Over 6 feet tall<br>
<input type='checkbox' name="check" value=""> Over 200 pounds</td>
</tr>
<tr>
<td>Describe your athletic ability:</td>
<td><input type="text" name="ability"></td>
</tr>
<tr>
<td><input type="submit" value="Enter my information"></td>
</tr>
</form>
</table>
</body>
</html>