<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="royal.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="background: url(img/portada.jpg)">
      <?php
        if (!isset($_POST["regis"])){
         
        ?>
    <div class="principal">
        
            <div class="registro1">
                <div class="graf_re">
                   <a href="Index.html"><img src="img/royal.png"width="200px" height="100px" alt="inicio"></a>
                </div>
                <div>
              
                    <h2 id="titulo_re">REGISTRO</h2>
                    <form method="post" action="registro.php">
                            <p><input name="nombre" type="text" size="20" placeholder="Nombres"id="button_re"></p>
                            <p><input name="apellido" type="text" size="20" placeholder="Apellidos" id="button_re"></p>
                            <p><input name="cedula" type="text" size="11" placeholder="Cedula sin guion" id="button_re"></p>
                            <p><input name="nombre" type="email" size="100" placeholder="Correo" id="button_re"></p>
                            <p><input name="nombre" type="text" size="10" placeholder="Telefono" id="button_re"></p>  
                            <p><input name="password" type="password" size="20" placeholder="Contrasena" id="button_re"></p> 
                            <p><input name="password" type="password" size="20" placeholder="Repetir Contrasena" id="button_re"></p>   
                            <br>
                             <input type="submit" value="Registrarse" name="regis"  >
                            
                            <br>
                    </form>>
                            <p>Ya tienes una cuenta? <a href="Login.html" id="ingresos">INGRESA YA!</a></p> 
                        </div>       
                    </div>
        </div>
    
</body>
</html>