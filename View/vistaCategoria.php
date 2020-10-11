<!DOCTYPE html>
<html>
<head>
	<title>Mini Prueba</title>
</head>
<body>

	<table>
		<tr>
			<th>ID categoria</th>
			<th>Descripcion</th>
		</tr>

		<?php
		foreach ($this->model->consultarCategoria() as $value):?>
			<tr>
				<td><?php echo $value->codigo; ?></td>
				<td><?php echo $value->descripcion; ?></td>


			</tr>
		<?php endforeach; ?>


	</table>

</body>
</html>