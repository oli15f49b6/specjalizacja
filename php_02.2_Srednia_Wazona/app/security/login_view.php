<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
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

<div style="width:90%; margin: 2em auto;">
<section class="hero" id="home">
	<div class="contact-form glass"> 
		<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
			<legend class="section-title">Logowanie</legend>
				<div class="form-group">
					<label for="id_login">login: </label>
				</div>
				<div class="form-group">
					<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
				</div>
				<div class="form-group">
					<label for="id_pass">pass: </label>
				</div>
				<div class="form-group">	
					<input id="id_pass" type="password" name="pass" />
				</div>
			<input type="submit" value="zaloguj" class="submit-btn"/>
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
		echo '</ol> </div>';
	}
}
?>
</section>
</div>

</body>
</html>