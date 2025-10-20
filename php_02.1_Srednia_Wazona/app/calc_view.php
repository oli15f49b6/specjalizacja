<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator sredniej wazonej</title>
<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/css/templatemo-neural-style.css">
</head>
<body>

<!-- Epic Neural Background -->
<div class="neural-background"></div>
    
<!-- Floating Geometric Shapes -->
<div class="geometric-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
</div>

<!-- Neural Network Lines -->
<div class="neural-lines">
    <div class="neural-line"></div>
    <div class="neural-line"></div>
    <div class="neural-line"></div>
</div>
<br>
<section class="hero" id="home">
	<div class="contact-form glass"> 
		<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
			<h2 class="section-title">Oblicz Średnią ważoną</h2>
			<div class="form-group">
				<input id="id_x" type="text" name="x" value="<?php out($x); ?>" placeholder = "Liczba 1">
			</div>	
			<div class="form-group">
				<input type="text" name="xWaga" value="<?php out($xW); ?>" placeholder = "Waga liczby 1">
			</div>
			<div class="form-group">
				<input id="id_y" type="text" name="y" value="<?php out($y); ?>" placeholder = "Liczba 2">
			</div>
			<div class="form-group">
				<input type="text" name="yWaga" value="<?php out($yW); ?>" placeholder = "Waga liczby 2">
			</div>
			<input class="submit-btn" type="submit" value="Oblicz" />
		</form>	
	</div>
</section>
<br>
<section class="hero" id="home">
	<?php
	//wyświeltenie listy błędów, jeśli istnieją
	if (isset($messages)) {
		if (count ( $messages ) > 0) {
			echo '<div class="contact-form glass"> <ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; width:300px;">';
			foreach ( $messages as $key => $msg ) {
				echo '<li>'.$msg.'</li>';
			}
			echo '</ol></div>';
		}
	}
	?>
	
	<?php if (isset($wynik)){ ?>
		<div class="contact-form glass">
			<?php echo 'Wynik: '.$wynik; ?>
		</div>
	<?php } ?>
	</div>
</section>
<br>

</body>
</html>