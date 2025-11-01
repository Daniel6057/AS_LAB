<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota,&$lata,&$procent) {
	$kwota = isset($_REQUEST['kwota']) ? str_replace(',', '.', $_REQUEST['kwota']) : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$procent = isset($_REQUEST['procent']) ? str_replace(',', '.', $_REQUEST['procent']) : null;
}

function validate(&$kwota,&$lata,&$procent,&$messages) {
	if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
		return false;
	}

	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano na ile lat jest brany kredyt';
	}
	if ( $procent == "") {
		$messages [] = 'Nie podano na ile procent jest brany kredyt';
	}

	if (count ( $messages ) != 0) return false;
	
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

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$procent,&$messages,&$result){
	global $role;
	
	$kwota = floatval($kwota);
	$lata = intval($lata);
	$procent = floatval($procent);
	
	if ($kwota > 100000) {
		if ($role !== 'admin') {
			$messages[] = 'Tylko administrator może operować na kwotach powyżej 100 000 zł!';
			return;
		}
	}

	$odsetki = $kwota * ($procent / 100) * $lata;
	$do_splaty = $kwota + $odsetki;
	$result = $do_splaty / ($lata * 12);
}

$kwota = null;
$lata = null;
$procent = null;
$result = null;
$messages = array();

getParams($kwota,$lata,$procent);
if ( validate($kwota,$lata,$procent,$messages) ) {
	process($kwota,$lata,$procent,$messages,$result);
}

include 'credit_calc_view.php';