<?php
class Usuario {
    public $edad;
    public $genero;
    public $piel;
    public $altura;
    public $peso;
    public $preferencias;

    public function __construct($edad, $genero, $piel, $altura, $peso, $preferencias) {
        $this->edad = $edad;
        $this->genero = $genero;
        $this->piel = $piel;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->preferencias = $preferencias;
    }

    public function obtenerRecomendaciones() {
        $recomendaciones = [];

        if ($this->genero == 'femenino') {
            if ($this->piel == 'claro') {
                $recomendaciones[] = "Prueba colores pastel o tonos suaves.";
            } elseif ($this->piel == 'medio') {
                $recomendaciones[] = "Colores como verde oliva, rojo oscuro, o beige te pueden favorecer.";
            } else {
                $recomendaciones[] = "Opta por colores vivos como amarillo, azul rey o fucsia.";
            }
        } else {
            if ($this->piel == 'claro') {
                $recomendaciones[] = "Usa colores oscuros como gris, azul marino o negro.";
            } elseif ($this->piel == 'medio') {
                $recomendaciones[] = "Colores como marrón, verde bosque o burdeos son ideales.";
            } else {
                $recomendaciones[] = "Prueba tonos cálidos como naranja, rojo ladrillo o dorado.";
            }
        }

        if ($this->edad < 18) {
            $recomendaciones[] = "Busca ropa cómoda y casual, ideal para actividades diarias.";
        } elseif ($this->edad < 40) {
            $recomendaciones[] = "Estilo moderno y profesional podría ser una buena opción.";
        } else {
            $recomendaciones[] = "Prendas clásicas y elegantes te quedarán bien.";
        }

        return $recomendaciones;
    }
}
