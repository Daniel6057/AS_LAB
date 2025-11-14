<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParams(&$form) {
	$form['kwota'] = isset($_REQUEST['kwota']) ? str_replace(',', '.', $_REQUEST['kwota']) : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? str_replace(',', '.', $_REQUEST['procent']) : null;
}

function validate(&$form,&$infos,&$msgs) {
	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['procent']))) {
		return false;
	}

	$infos [] = 'Przekazano parametry.';
	

	if ( $form['kwota'] == "") {
		$msgs [] = 'Nie podano kwoty';
	}
	if ( $form['lata'] == "") {
		$msgs [] = 'Nie podano na ile lat jest brany kredyt';
	}
	if ( $form['procent'] == "") {
		$msgs [] = 'Nie podano na ile procent jest brany kredyt';
	}

	if (count ( $msgs ) != 0) return false;
	
	if (! is_numeric( $form['kwota'] )) {
		$msgs [] = 'Kwota nie jest liczbą';
	} else {
        if($form['kwota'] <= 0) $msgs [] = 'Kwota musi być większa od zera';
    }
	
	if (!ctype_digit(strval($form['lata']))) {
		$msgs [] = 'Lata muszą być liczbą i zaokrąglone do całości';
	} else {
        if($form['lata'] <= 0) $msgs [] = 'Podaj większą liczbę lat niż zero';
    }
    
    if (! is_numeric( $form['procent'] )) {
		$msgs [] = 'Procent nie jest liczbą';
	}  else {
        if($form['procent'] < 0) $msgs [] = 'Procent nie może być ujemny';
    }

	if (count ( $msgs ) != 0) return false;
	else return true;
}

function process(&$form,&$infos,&$msgs,&$result){
	global $role;
	
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

	$form['kwota'] = floatval($form['kwota']);
	$form['lata'] = intval($form['lata']);
	$form['procent'] = floatval($form['procent']);

	$odsetki = $form['kwota'] * ($form['procent'] / 100) * $form['lata'];
	$do_splaty = $form['kwota'] + $odsetki;
	$result = $do_splaty / ($form['lata'] * 12);
}

$form = null;
$infos = [];
$msgs =[];
$result = null;

getParams($form);
if ( validate($form,$infos,$msgs) ) {
	process($form,$infos,$msgs,$result);
}

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Kalkulator kredytowy');


$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('msgs',$msgs);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/credit_calc.tpl');