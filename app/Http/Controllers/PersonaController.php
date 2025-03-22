<?php

namespace App\Http\Controllers;

class PersonaController extends Controller
{ // Asegúrate de que el nombre coincida
    public function index()
    {
        $personas = [
            (object) ['nombre' => 'Ana', 'edad' => 30, 'rol' => 'docente'],
            (object) ['nombre' => 'Luis', 'edad' => 22, 'rol' => 'estudiante'],
            (object) ['nombre' => 'Carlos', 'edad' => 40, 'rol' => 'coordinador']
        ];

        return view('personas', compact('personas'));
    }
}
