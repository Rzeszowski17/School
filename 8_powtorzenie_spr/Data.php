<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Członkowie rodziny</title>
</head>
<body>
<?php
	if (isset($_POST['buton'])){
		echo '<h4>Dane członków rodziny</h4>';
		for ($i=1;$i<count($_POST);$i++){
			$count='person'.$i;
			if (!empty($_POST[$count])){
				echo "Osoba $i: ",$_POST[$count],"<br><br>";
			}
		}
	
	}else if (!empty($_POST['family'])){
		$ilosc=$_POST['family'];
	?>
Rodzina:<br><br>
	<form method="POST">
		<?php
		for ($x=1;$x<=$ilosc;$x++)
		{   
		echo '<input type="text" name="person',$x,'" placeholder="Członek rodziny" pattern="[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż ]',$x,'"/><br><br>';
		}
		?>
		<input type="submit" value="Wyślij" name="buton">
	</form>
	<?php
	
	}else{
		header('location ./');
    }
    ?>
</body>
</html>