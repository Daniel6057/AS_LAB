<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
	private $form;
	private $rata;

    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->rata = new CalcResult();
	}

    public function getParams() {
        $this->form->kwota = isset($_REQUEST['kwota']) ? str_replace(',', '.', $_REQUEST['kwota']) : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->procent = isset($_REQUEST['procent']) ? str_replace(',', '.', $_REQUEST['procent']) : null;
    }

    public function validate() {
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            return false;
        }
        
        if ( $this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ( $this->form->lata == "") {
            $this->msgs->addError('Nie podano na ile lat jest brany kredyt');
        }
        if ( $this->form->procent == "") {
            $this->msgs->addError('Nie podano na ile procent jest brany kredyt');
        }

        if (! $this->msgs->isError()) {
        
            if (! is_numeric( $this->form->kwota )) {
                $this->msgs->addError('Kwota nie jest liczbą');
            } else {
                if($this->form->kwota <= 0) $this->msgs->addError('Kwota musi być większa od zera');
            }
            
            if (!ctype_digit(strval($this->form->lata))) {
                $this->msgs->addError('Lata muszą być liczbą i zaokrąglone do całości');
            } else {
                if($this->form->lata <= 0) $this->msgs->addError('Podaj większą liczbę lat niż zero');
            }
            
            if (! is_numeric( $this->form->procent )) {
                $this->msgs->addError('Procent nie jest liczbą');
            }  else {
                if($this->form->procent< 0) $this->msgs->addError('Procent nie może być ujemny');
            }
        }

        return ! $this->msgs->isError();
    }

    public function process(){
	    
        $this->getParams();
        
        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);
            
            $this->msgs->addInfo('Parametry poprawne. Wykonuję obliczenia.');
            
            $odsetki = $this->form->kwota * ($this->form->procent / 100) * $this->form->lata;
	        $do_splaty = $this->form->kwota + $odsetki;
	        $this->rata->rata =round($do_splaty / ($this->form->lata * 12), 2);
        }

        $this->generateView();
    }

    public function generateView(){
		
        global $conf;
        
        $smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Obiekty ładnie');
		$smarty->assign('page_header','Kalkulator kredytowy');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->rata);
		
		$smarty->display($conf->root_path.'/app/CalcView.tpl');
    }
}
?>