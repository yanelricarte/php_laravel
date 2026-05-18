<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function inicio()
    {
        $titulo = 'Inicio';
        $mensaje = 'Estamos aprendiendo Laravel paso a paso.';

        return view('inicio', compact('titulo', 'mensaje'));
    }

    public function materias()
    {
        $titulo = 'Materias';
        $mensaje = 'Estas son las materias que estamos aprendiendo en el curso de Laravel.';
        $materias = ['PHP', 'MYSQL', 'Laravel', 'Git y GitHub', 'Proyecto Final'];
        return view('materias', compact('titulo', 'mensaje', 'materias'));
    }

    public function contacto()
    {
        $titulo = 'Contacto';
        $mensaje = 'Bienvenido a la página de contacto desde la vista';
        $datos = ['Correo: contacto@ejemplo.com', 'Teléfono: 123-456-7890', 'Dirección: Calle Falsa 123'];
        return view('contacto', compact('titulo', 'mensaje', 'datos'));
    }
}