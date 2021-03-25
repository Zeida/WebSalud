<?php
include_once 'presentation.class.php';
include_once 'data_access.class.php';
View::start('Clínica WebSalud');


echo "<img src='logo.png' class='cabecera'>";
View::navigation();

if(!User::getLoggedUser()){
    echo '<h1 class="index">
      </h1>
    
      <p>
        WebSalud es una clínica joven con un gran cuadro
        profesional, las más modernas técnicas de diagnóstico y
        una gestión y seguimientos de tratamientos apoyados en
        las tecnologías de la información. La clínica está situada en
        Las Palmas de Gran Canaria ofreciendo sus servicios a los
        habitantes de las islas.
    
      </p>
      <br>';
}else{
    echo '<p>Bienvenido,'.User::getLoggedUser()['nombre'].'</p>';
      
}
          

View::end();
