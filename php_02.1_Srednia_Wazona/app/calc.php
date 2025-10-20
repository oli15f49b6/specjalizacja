<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

function pobierzParametry(&$x,&$y,&$xW,&$yW){

	$x = isset($_REQUEST ['x'])?$_REQUEST ['x']:null;			//liczba 1
	$y = isset($_REQUEST ['y'])?$_REQUEST ['y']:null;			//liczba 2
	$xW = isset($_REQUEST['xWaga'])?$_REQUEST['xWaga']:null;	// waga liczby 1
	$yW = isset($_REQUEST['yWaga'])?$_REQUEST['yWaga']:null;	// waga liczby 2

}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function walidacja(&$x,&$y,&$xW,&$yW,&$messages){

	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($xW) && isset($yW))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
		$messages [] = 'Nie podano liczby 1';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano liczby 2';
	}
	if ( $xW == "") {
		$messages [] = 'Nie podano wagi liczby 1';
	}
	if ( $yW == "") {
		$messages [] = 'Nie podano wagi liczby 2';
	}

	if(count( $messages ) != 0 ) return false;

	// sprawdzenie, czy $x i $y oraz $xW i $yW są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $xW )) {
		$messages [] = 'Wartość wagi pierwszej liczby nie jest liczbą całkowitą';
	}

	if (! is_numeric( $yW )) {
		$messages [] = 'Wartość wagi drugiej liczby nie jest liczbą całkowitą';
	}

	if(count( $messages ) != 0 ) return false;
	else return true;
}

function proces(&$x,&$y,&$xW,&$yW,&$messages,&$wynik){
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	
	$xW = intval($xW);
	$yW = intval($yW);

	//wykonanie operacji
	$wynik = ($x * $xW + $y * $yW)/($xW+$yW);
}

$x = null;
$y = null;
$xW = null;
$yW = null;
$wynik = null;
$messages = array();

pobierzParametry($x,$y,$xW,$yW);
if(walidacja($x,$y,$xW,$yW,$messages)){
	proces($x,$y,$xW,$yW,$messages,$wynik);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';