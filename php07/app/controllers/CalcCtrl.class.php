<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
	private $form;
	private $rata;

    public function __construct(){
		$this->form = new CalcForm();
		$this->rata = new CalcResult();
	}

    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->procent = getFromRequest('procent');
    }

    public function validate() {
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            return false;
        }
        
        if ( $this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ( $this->form->lata == "") {
            getMessages()->addError('Nie podano na ile lat jest brany kredyt');
        }
        if ( $this->form->procent == "") {
            getMessages()->addError('Nie podano na ile procent jest brany kredyt');
        }

        if (! getMessages()->isError()) {
        
            if (! is_numeric( $this->form->kwota )) {
                getMessages()->addError('Kwota nie jest liczbą');
            } else {
                if($this->form->kwota <= 0) getMessages()->addError('Kwota musi być większa od zera');
            }
            
            if (!ctype_digit(strval($this->form->lata))) {
                getMessages()->addError('Lata muszą być liczbą i zaokrąglone do całości');
            } else {
                if($this->form->lata <= 0) getMessages()->addError('Podaj większą liczbę lat niż zero');
            }
            
            if (! is_numeric( $this->form->procent )) {
                getMessages()->addError('Procent nie jest liczbą');
            }  else {
                if($this->form->procent< 0) getMessages()->addError('Procent nie może być ujemny');
            }
        }

        return ! getMessages()->isError();
    }

    public function action_calcCompute(){
	    
        $this->getParams();
        
        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);
            
            if ($this->form->kwota > 100000 && !inRole('admin')) {
			getMessages()->addError('Kredyt powyżej 100 000 zł może obliczyć tylko admin!');
			}
            else {
                getMessages()->addInfo('Parametry poprawne. Wykonuję obliczenia.');
            
                $odsetki = $this->form->kwota * ($this->form->procent / 100) * $this->form->lata;
	            $do_splaty = $this->form->kwota + $odsetki;
	            $this->rata->rata =round($do_splaty / ($this->form->lata * 12), 2);
            }
            
            try {
				
				getDB()->insert("wyniki", [
					"kwota" => $this->form->kwota,
					"lata" => $this->form->lata,
					"procent" => $this->form->procent,
					"rata" => $this->rata->rata,
					"data" => date("Y-m-d H:i:s")
				]);

			} catch (\PDOException $ex) {
				getMessages()->addError("DB Error: ".$ex->getMessage());
			}
        }

        $this->generateView();
    }

    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

    public function generateView(){
        
        getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Ochrona i routing');
		getSmarty()->assign('page_header','Kalkulator kredytowy');
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->rata);
		
		getSmarty()->display('CalcView.tpl');
    }
}
?>