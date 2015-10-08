<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	$arrayDeCds=votacion::TraerTodoLosCds();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Provincia</th><th>Sexo</th><th>Presidente</th><th>Dni</th><th>Localidad</th><th>Domicilio</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeCds as $cd) {
	echo"<tr>
			<td><a onclick='EditarCD($cd->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarCD($cd->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td><a onclick=".'"VerEnMapa('."'$cd->provincia','$cd->domicilio','$cd->localidad',$cd->id)".'"'." class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Ver en mapa</a></td>
			<td>$cd->provincia</td>
			<td>$cd->sexo</td>
			<td>$cd->presidente</td>
			<td>$cd->dni</td>
			<td>$cd->localidad</td>
			<td>$cd->domicilio</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>