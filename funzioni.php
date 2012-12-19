<?php 
	
	function getMethod() {
		return $_SERVER['REQUEST_METHOD'];
	}
	
	function isPost() {
		$metodo = getMethod();
		if($metodo == 'POST') return true;
		return false;
	}
	
	function isGet() {
		$metodo = getMethod();
		if($metodo == 'GET') return true;
		return false;
	}
	
	/**
	 * Restituisce i parametri passati tramite
	 * URL o Form.
	 * Se il parametro non esiste, restituisce false
	 */
	function getParametro($parametro) {
		$vettore = null;
		if(isPost()) $vettore = $_POST;
		else if(isGet()) $vettore = $_GET;
		else return false;
		if (isset($vettore[$parametro])) return $vettore[$parametro];
		else return false;
	}
