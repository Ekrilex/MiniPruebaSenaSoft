<?php

require_once 'Model/categorias.php';

class CategoriaController
{

	private $model;


	public function __construct()
	{
		$this->model=new Categoria();

	}


	public function index(){
		require_once 'view/vistaCategoria.php';
	}

}
?>