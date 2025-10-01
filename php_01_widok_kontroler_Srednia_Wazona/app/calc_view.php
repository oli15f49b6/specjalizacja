<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<h2>Oblicz Średnią ważoną</h2>
	<label for="id_x">Liczba 1: </label>
	<input id="id_x" type="text" name="x" value="<?php isset($x)?print($x):''; ?>" /><br />
	<label for="id_waga_x">Waga liczby 1</label>
	<input type="text" name="xWaga" value="<?php isset($xW)?print($xW):''; ?>"><br />
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php isset($y)?print($y):''; ?>" /><br />
	<label for="id_waga_x">Waga liczby 2</label>
	<input type="text" name="yWaga" value="<?php isset($yW)?print($yW):''; ?>"><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$wynik; ?>
</div>
<?php } ?>

</body>
</html>