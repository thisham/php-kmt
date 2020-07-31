<?php

/**
 * 
 */
class Kontroler
{
	
	public function tampilkan($view, $data = [])
	{
		require_once DIREKTORI . '/app/tampilan/' . $view . '.php';
	}

	public function model($model)
	{
		require_once DIREKTORI . '/app/model/' . $model . '.php';
		return new $model;
	}
	
	public function pustaka($pustaka)
	{
		require_once DIREKTORI . '/app/pustaka/' . $pustaka . '.php';
		return new $pustaka;
	}
	
	public function helper($helper)
	{
		require_once DIREKTORI . '/app/helper/' . $helper . '.php';
	}
}

?>
