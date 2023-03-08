<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    // Método para cargar datos de bienvenida
    public function loadWelcomeData()
    {
        return view('welcome');
    }
}
