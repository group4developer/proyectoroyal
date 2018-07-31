<?php
require_once('dbDetalles.php');
$conn= new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    echo $error=$conn->connect_error;
    exit();
}
//echo "OK";
?>
