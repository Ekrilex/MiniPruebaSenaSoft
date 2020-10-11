<?php

class DataBase
{
	public static function Conectar()
	{
		$conex=new PDO('pgsql:dbname=minipruebaS;host=localhost;port=5434;user=postgres;password=1234');
		$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conex;
	}

}

?>