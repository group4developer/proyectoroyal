<?php
	$id= $_GET['id'];
        try {
            require_once('conexion.php');
            $sql="delete from tablacurso where id = $id";
            $result=$conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
	//echo($id);
	header("Location: eliminareg.php");
?>

