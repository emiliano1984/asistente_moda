<?php
require_once 'modelo/Usuario.php';

class AsistenteControlador{
    public function mostrarFormulario() {
        require 'vista/formulario.php';
    }

    public function procesarFormulario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario(
                $_POST['edad'],
                $_POST['genero'],
                $_POST['piel'],
                $_POST['altura'],
                $_POST['peso'],
                $_POST['preferencias']
            );

            $recomendaciones = $usuario->obtenerRecomendaciones();
            require 'vista/recomendaciones.php';
        } else {
            header("Location: index.php");
            exit();
        }
    }
}
