<?php
include_once 'business.class.php';
class View{
    public static function  start($title){
        $html = "<!DOCTYPE html>
        <html>
        <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"estilos.css\">
        <script src=\"scripts.js\"></script>
        <title>$title</title>
        </head>
        <body>";
        User::session_start();
        echo $html;
    }

    public static function navigation(){
        echo '<nav class="navbar">';
        echo '<ul>
              <li><a class="active" href="index.php">Inicio</a></li>
              <li><a href="especialidades.php">Especilidades</a></li>
              <li><a href="contacto.php">Contacto</a></li>';
              if(!User::getLoggedUser()){
                  echo '<li><a href="login.php">Iniciar sesion</a></li>';
              }else{
                  
                  switch(User::getLoggedUser()['tipo']){
                        case 1: 
                            echo '<li><a href="especialistas.php">Especialistas</a></li>';
                            echo '<li><a href="auxiliares.php">Auxiliares</a></li>';
                            echo '<li><a href="usuarios.php">Usuarios</a></li>';
                            break;
                        case 2:
                            echo '<li><a href="pacientes.php">Pacientes</a></li>';
                            break;
                        case 3:
                            echo '<li><a href="pacientes.php">Pacientes</a></li>';
                            break;
                        case 4:
                            echo '<li><a href="especialistas.php">Especialistas</a></li>';
                            echo '<li><a href="historial.php">Historial médico</a></li>';
                            break;
                        default:
                            break;
                            
                                
                  }
                  
                  echo '<li>'.User::getLoggedUser()['nombre'].'</li>';
                  echo '<li><a href="logout.php">Cerrar sesión</a></li>';
                  
              }
              
        echo '</ul>';
        echo '</nav>';
    }

    public static function end(){
        echo '<footer class="footer"><p>Derechos reservados_ Clínica web Salud _ 2021 &copy;</p></footer>';
        echo '</body>';
        echo '</html>';
    }
}
