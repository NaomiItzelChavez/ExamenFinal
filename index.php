<?php
 var_dump($_POST);
  require_once 'vendor/autoload.php';
 
  use Illuminate\Database\Capsule\Manager as Capsule;
  require_once 'info.php';

  $capsule = new Capsule;
  
  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => '127.0.0.1:3306',
      'database'  => 'examen',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

  // Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();

  // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();

  if(!empty($_POST)){
    $pro = new info();
    $pro->nombre = $_POST['nombre'];
    $pro->apellido = $_POST['apellido'];
    $pro->correo = $_POST['correo'];
    $pro->contraseña = $_POST['contraseña'];
    $pro->save();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="styles.css">
 
    <title>Pag</title>
  </head>
  <body id="Fondo" class="todo">
    <!--<script type="text/javascript" src="app.js"></script>-->
    
    <?php include_once 'includes/templates/header.php'?>

    <section class="container boton">
      <a id="colapso" class=" black waves-effect waves-light btn colapso" > Ocultar</a>
      <a id="uno"  class=" black waves-effect waves-light btn uno" onclick="saludar()" >Morado</a>
      <a id="dos" class=" black waves-effect waves-light btn dos" onclick="saludarDos()">Rosa</a>
    </section>
      
    <section class="container">      
      <div class="row">
        <form action = "index.php" method="post" id="formulario" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input name="nombre" placeholder="Nombre" id="first_name" type="text" class="validate">
            </div>
            <div class="input-field col s6">
              <input name="apellido" placeholder="Apellidos" id="last_name" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="correo" placeholder="Correo Electronico" id="email" type="email" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="contraseña" placeholder="Contraseña" id="password" type="password" class="validate">
            </div>
          </div>
          
          <label>
            <input type="checkbox" id="checkbox1" class="checkbox1">
            <span>Terminos y Condiciones</span>
          </label><br>
          
          <label>
            <input type="checkbox" id="checkbox2" class="checkbox2" >
            <span>No soy un robot</span>
          </label><br>
          
          <input type="submit" id="mos" class="mos"><br>
        </form>
      </div>
    </section>
    
    <section class="container">
      <div class="seccion3">
      </div>
    </section>
  </body>
  
  <script type="text/javascript">
    const buno = document.getElementById('uno');
    const bdos = document.getElementById('dos')

    const fondoUno = document.getElementById('Fondo');

    function saludar(){
        fondoUno.style.background = '#f3e5f5';
    }

    function saludarDos(){
        fondoUno.style.background = '#fce4ec';
    }
  </script>
  
  </html>