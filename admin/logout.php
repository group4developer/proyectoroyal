<?php

	 

	session_start();

	 session_unset();
         session_destroy(); 

	header('Location: http://localhost/Web_Royal/index.php');

	 
?>