<!DOCTYPE html>
<head>
<style>
body{
     background-color: white;
}
table{
     width: 450px;
     margin: auto;
     border: 5px ridge;
}
.pi{
     width: 145px;
}
.tek{
     color: grey;
     font-size: 12px;
}

</style>
</head>
<body>
<table >
<form action="./form_user_data.php" method="post" >
<tr><td colspan=2>(*) Required fields</td></tr>
<tr> <td class="pi">Account Type*</td>
<td> <input type="radio" name="account" value="PER" requried checked >Personal Account
     <input type="radio" name="account" value="BUS" requried>Business Account</td>
</tr>
<tr>  <td> First Name*</td>
<td> <input type="text" name="First" value="" requried pattern="[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż ]{2,10}" ></td>
</tr>
<tr>
<td>Last Name*</td>
<td><input type="text" name="Last" value="" requried pattern="[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż ]{2,20}" ></td>
</tr>
<tr>
<td>Country/Region*</td>
<td><select name="country" requried >
<option values="u">USA</option>
<option values="p">Polska</option>
<option values="g">Grecja</option>
</select></td>
</tr>
<tr>
<td>Street Address*</td>
<td><input type="text" name="Address1"  value="" requried ></td>
</tr>
<tr>
<td>Street Address 2</td>
<td><input type="text" name="Address2" value="" ></td>
</tr>
<tr>
<td>City*</td>
<td><input type="text" name="City" value="" utocomplete="off" requried ></td>
</tr>
<tr>
<td>State/Province*</td>
<td><select name="Province" requried>
<option valuse="S"  disabled selected>Select State or Province</option>
<option values="w">Wielkopolskie</option>
<option values="z">Zachodniopomorskie</option>
<option values="m">Małopolskie</option>
</select></td>
</tr>
<tr>
<td>ZIP/Postal Code*</td>
<td><input type="text" name="ZIP" size="6" value="" requried pattern="[0-9]{2}-[0-9]{3}|[0-9]{5}" ></td>
</tr>
<tr>
<td>  </td>
<td><div class="tek">Only used for questions related to your order.</div></td>
</tr>
<tr>
<td>Phone Number*</td>
<td><input type="text" name="Phone" size="19" value="" requried ></td>
</tr>
<tr>
<td colspan=2><center><input type="submit" name="button" value="Send"></center></td>
</tr>
</table>
</body>
</html>
