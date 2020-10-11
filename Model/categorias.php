<?php



class Categoria{

	private $conexion;
	public $codigo;
	public $descripcion;

	


	public function __construct(){
		try{
			$this->conexion= DataBase:: Conectar();

		}catch(Exception $e){
			
			die($e->getMessage());
		}
	}



	public function consultarCategoria(){
		try{
			$pgsql=$this->conexion->prepare("select * from categoria");
			$pgsql->execute();
			return $pgsql->fetchALL(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}

?>