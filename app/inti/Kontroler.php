<?php

/**
 * 
 */
class Kontroler
{
	
	public function tampilkan($view, $data = [])
	{
		require_once '../app/tampilan/' . $view . '.php';
	}

	public function model($model)
	{
		require_once '../app/model/' . $model . '.php';
		return new $model;
	}
	
	public function pustaka($pustaka)
	{
		require_once '../app/pustaka/' . $pustaka . '.php';
		return new $pustaka;
	}
	
	public function helper($helper)
	{
		require_once '../app/helper/' . $helper . '.php';
	}
}

?>
