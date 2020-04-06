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
}

?>