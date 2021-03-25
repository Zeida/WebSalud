<?php
include_once 'presentation.class.php';
include_once 'data_access.class.php';
View::start('Clínica WebSalud');

View::navigation();

echo '<form method="post">
        <div class="container">
        <label ><b>Username</b></label>
        <input type="text" placeholder="Introduzca su  nombre" name="username" required>
    
        <label ><b>Password</b></label>
        <input type="password" placeholder="Introduzca contraseña" name="password" required>
    
        <button name="acceso" type="submit">Acceder</button>
      </div>
    </form>';
    
    if(isset($_POST['acceso'])){
        if(!User::login($_POST['username'], $_POST['password'])){
            echo '<p> Usuario incorrecto </p>';
        }else{
            header("Location: index.php");

        }
    }
    
    

View::end();
