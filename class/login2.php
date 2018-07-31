<?php
require_once 'validaciones.php';
 session_start();
 $login=$_POST["cedula"];
 $clave=$_POST["password"];
  if (!validaRequerido($login)) {
      header("Location:http://localhost/Web_royal/login.html");
      
   }
 else {
       

 if (isset($login)&& isset($clave))
 {
         try {
            require_once('conexion.php');
            $sql = "select * from cliente where (cedula_cliente='$login' and contrasena='$clave')";
            $result=$conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        $row=$result->fetch_array();
	if (($row['cedula_cliente']==$login) && ($row['contrasena']==$clave))
	{
            $_SESSION["registrada"]="hola";
            header("Location:http://localhost/Web_royal/menu.php");
 	}
 	 else
	    {
 		header("Location:http://localhost/Web_royal/login.html");
 		}
	}
 else
 {
     session_unset();
     session_destroy(); 
         
 }
 }
?>
