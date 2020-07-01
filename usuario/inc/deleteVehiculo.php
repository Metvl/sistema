<?php
	include "conexionbd.php";

	EliminarVehiculo($_GET['id']);

	function EliminarVehiculo($id)
	{
		$sentencia="DELETE FROM vehiculos WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Vehículo Eliminado exitosamente");
	window.location.href='./disponible.php';
</script>