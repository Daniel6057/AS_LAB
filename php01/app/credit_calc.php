<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów
$kwota = str_replace(',', '.', $_REQUEST['kwota']);
$lata = $_REQUEST['lata'];
$procent = str_replace(',', '.', $_REQUEST['procent']);

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $lata == "") {
	$messages [] = 'Nie podano na ile lat jest brany kredyt';
}
if ( $procent == "") {
	$messages [] = 'Nie podano na ile procent jest brany kredyt';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą';
	} else {
        if($kwota <= 0) $messages [] = 'Kwota musi być większa od zera';
    }
	
	if (!ctype_digit(strval($lata))) {
		$messages [] = 'Lata muszą być liczbą i zaokrąglone do całości';
	} else {
        if($lata <= 0) $messages [] = 'Podaj większą liczbę lat niż zero';
    }
    
    if (! is_numeric( $procent )) {
		$messages [] = 'Procent nie jest liczbą';
	}  else {
        if($procent < 0) $messages [] = 'Procent nie może być ujemny';
    }

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kwota = floatval($kwota);
	$lata = intval($lata);
	$procent = floatval($procent);

    $odsetki = $kwota * ($procent / 100) * $lata;
    $do_splaty = $kwota + $odsetki;
    $result = $do_splaty / ($lata * 12);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$lata,$procent,$result)
//   będą dostępne w dołączonym skrypcie
include 'credit_calc_view.php';