<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	<title><?php out($page_title); if (empty($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
    <link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/css/templatemo-neural-style.css">
</head>
<body>

<div class="hero" id="home">
    <div class="hero-content">
	    <h1><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></h1>
    
    <div class="hero-description">
    	<h2><?php out($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny ... <?php } ?></h1>
    </div>
    <div class="hero-description">
        <p>
		    <?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
	    </p>
    </div>
    <div class="hero-description">
        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="logo">Wyloguj</a>
    </div>
    </div>
</div>

<div class="content">