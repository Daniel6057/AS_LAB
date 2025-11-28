<?php
function getFromRequest($param_name){
	return isset($_REQUEST [$param_name]) ? str_replace(',', '.', $_REQUEST[$param_name]) : null;
}