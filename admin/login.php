<?php

require_once dirname( __DIR__ ) . '/class/validaciones.php';
 session_start();
 $login=$_POST["cedula"];
 $clave=$_POST["password"];
  if (!validaRequerido($login)) {
      header("Location:http://localhost/Web_royal/admin/admin_login.html");
      
   }
 else {
       

 if (isset($login)&& isset($clave))
 {
         try {
            require_once dirname( __DIR__ ) . '/class/conexion.php';
            $sql = "select * from administrador where (cedula_admin='$login' and contrasena_admin='$clave')";
            $result=$conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        $row=$result->fetch_array();
	if (($row['cedula_admin']==$login) && ($row['contrasena_admin']==$clave))
	{
            $_SESSION["loggedin"]=true;
            $_SESSION["user"]=$login;
            header("Location:http://localhost/Web_Royal/admin/menu.php");
 	}
 	 else
	    {
 		header("Location:http://localhost/Web_Royal/admin/admin_login.html");
 		}
	}
 else
 {
     session_unset();
     session_destroy(); 
         
 }
 }
?>
