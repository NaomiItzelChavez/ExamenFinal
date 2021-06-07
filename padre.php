<?php

namespace App\Models;

class{ 
    public $nombre;
    public $apellido;
    public $correo;
    public $contraseña;

    public function getNombre(){
      return $this->nombre;
    }
    public function getApellido(){
      return $this ->apellido;
    }
    public function getCorreo(){
        return $this ->correo;
    }
    public function getContraseña(){
        return $this ->contraseña;
    }

}