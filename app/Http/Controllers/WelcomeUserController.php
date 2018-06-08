<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    // metodo php invoke es llamar un objeto como si se tratara una funcion

    public function __invoke($name, $nick = null)
    {
        $name = ucfirst($name); // cambiar la primera letra en mayuscula

        if($nick){
            return "Bienvenido {$name}, tu apodo es {$nick}";
        }else{
            return "Bienvenido {$name}";
        }
    }
}
