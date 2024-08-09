<?php
if (isset($_POST['ficheroABorrar'])) {
	$nombre_del_archivo = "../" . trim($_POST['ficheroABorrar']);
	if (file_exists($nombre_del_archivo)) {
		unlink($nombre_del_archivo);
		echo "El fichero $nombre_del_archivo ha sido borrado";
	} else {
		echo "El fichero $nombre_del_archivo no existe";
	}
}
