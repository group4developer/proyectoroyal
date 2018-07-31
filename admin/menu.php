<html>
    <head>
         <link rel="stylesheet" href="http://localhost/Web_Royal/royal.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

	session_start();

	 

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	 

	} else {

	   echo "<h1 id='t_admin' >Esta pagina es solo para Uso del Administrador </h1>.<br>";

	   echo "<br><a href='http://localhost/Web_Royal/index.php'>INICIO</a>";

	   echo "<br><br><a href='admin_login.html'>INICIAR SESION</a>";

	 
	exit;
	}
        ?>
            </body>
</html>

<html>
    <head>
         <link rel="stylesheet" href="http://localhost/Web_Royal/royal.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <div class="principal">

        <header class="inicio" >
                    <div class="banner_logo" >
                            <p><img src="http://localhost/Web_royal/img/royal.jpg" alt="logo" id="logo"></p>
            
                    </div>
                     <h1 id="t_admin">Administrador</h1>
           
                    <div class="sociales">
                        
                            <li id="soc"><a href="#" > <img src="http://localhost/Web_royal/img/face.png" alt="" width="30px" height="30px" value="Facebook" name="facebook"></a></li>
                            <li id="soc2"><a href="#"> <img src="http://localhost/Web_royal/img/insta.png" alt="" width="30px" height="30px"></a></li>
                                           
                    </div>
                    <div class="sesion">    
                        
    
                        <li><a href="logout.php" id="login"> Salir</a></li>
                           
                           
                    </div>
                  
                 
               <div class="head1">     
                <nav >
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="servicio.html">Servicios</a></li>
                            <li><a href="promociones.html">Promociones</a></li>
                          
                            <li><a href="cotiza.html">Cotiza tu evento</a></li>
                            <li><a href="contacto.html">Contacto</a></li>
                        </ul>
                    </nav>
                </div> 
                            
          
        </header>
     
        <div class="col_left">
            <section class="fondo_admin">  
                <div class="fondo_color_admin">
                      <nav class="menu_admi">
                        <ul>
                            <li><a href="http://localhost/Web_Royal/clientes/insertarreg.php">REGISTRAR CLIENTES</a></li>
                            <li><a href="servicio.html">REGISTRAR SERVICIOS</a></li>
                            <li><a href="promociones.html">REGISTRAR UTILERIA</a></li>
                          
                            <li><a href="cotiza.html">REGISTRAR MENUS</a></li>
                            <li><a href="contacto.html">REGISTRAR RESERVAS</a></li>
                        </ul>
                        <ul>
                            <li><a href="http://localhost/Web_Royal/clientes/busca.html">MODIFICAR CLIENTES</a></li>
                            <li><a href="servicio.html">MODIFICAR SERVICIOS</a></li>
                            <li><a href="promociones.html">MODIFICAR UTILERIA</a></li>
                          
                            <li><a href="cotiza.html">MODIFICAR MENUS</a></li>
                            <li><a href="contacto.html">MODIFICAR RESERVAS</a></li>
                        </ul>
                        <ul>
                            <li><a href="http://localhost/Web_Royal/clientes/busca.html">ELIMINAR CLIENTES</a></li>
                            <li><a href="servicio.html">ELIMINAR SERVICIOS</a></li>
                            <li><a href="promociones.html">ELIMINAR UTILERIA</a></li>
                          
                            <li><a href="cotiza.html">ELIMINAR MENUS</a></li>
                            <li><a href="contacto.html">ELIMINAR RESERVAS</a></li>
                        </ul>
                        <ul>
                            <li><a href="http://localhost/Web_Royal/clientes/busca.html">BUSCAR CLIENTES </a></li>
                            <li><a href="servicio.html"> BUSCAR SERVICIOS</a></li>
                            <li><a href="promociones.html">BUSCAR UTILERIA</a></li>
                          
                            <li><a href="cotiza.html">BUSCAR MENUS</a></li>
                            <li><a href="contacto.html">BUSCAR RESERVAS</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">REPORTE DE CLIENTES</a></li>
                            <li><a href="servicio.html">REPORTE DE SERVICIOS</a></li>
                            <li><a href="promociones.html">REPORTE DE UTILERIA</a></li>
                          
                            <li><a href="cotiza.html">REPORTE DE MENUS</a></li>
                            <li><a href="contacto.html">REPORTE DE RESERVAS</a></li>
                        </ul>
                    </nav>
                    

                </div> 
            </section>
      

        </div>
        <footer class="final">
            
            <div class="img_footer">
                <p><img src="img/royal.png" alt="imagen_footer" id="img_foot"></p>
            </div>
            
            <div class="derechos">
                    <h5>Todos los derechos reservados © "Royal" Corp  Quito-Ecuador  by </h5>
        
                    </div>
        </footer>
        
       
    </div>
        <?php
        
        ?>
    </body>
</html>
