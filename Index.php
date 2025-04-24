<?php
// Clase Universidad
class Universidad {
    public $nombre, $ubicacion, $tipo, $numeroEstudiantes, $acreditada;

    public function __construct($nombre, $ubicacion, $tipo, $numeroEstudiantes, $acreditada) {
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->tipo = $tipo;
        $this->numeroEstudiantes = $numeroEstudiantes;
        $this->acreditada = $acreditada;
    }

    public function obtenerNombre() {
        return "Universidad: $this->nombre";
    }

    public function obtenerUbicacion() {
        return "Ubicación: $this->ubicacion";
    }

    public function obtenerTipo() {
        return "Tipo: $this->tipo";
    }

    public function obtenerCantidadEstudiantes() {
        return "Estudiantes: $this->numeroEstudiantes";
    }

    public function estaAcreditada() {
        return $this->acreditada ? "Está acreditada." : "No está acreditada.";
    }
}

// Clase Colegio
class Colegio {
    public $nombre, $nivel, $direccion, $cantidadCursos, $jornada;

    public function __construct($nombre, $nivel, $direccion, $cantidadCursos, $jornada) {
        $this->nombre = $nombre;
        $this->nivel = $nivel;
        $this->direccion = $direccion;
        $this->cantidadCursos = $cantidadCursos;
        $this->jornada = $jornada;
    }

    public function obtenerNombre() {
        return "Colegio: $this->nombre";
    }

    public function obtenerNivel() {
        return "Nivel: $this->nivel";
    }

    public function obtenerDireccion() {
        return "Dirección: $this->direccion";
    }

    public function obtenerCursos() {
        return "Cursos: $this->cantidadCursos";
    }

    public function obtenerJornada() {
        return "Jornada: $this->jornada";
    }
}

// Clase Celular
class Celular {
    public $marca, $modelo, $sistemaOperativo, $memoriaInterna, $camaraMP;

    public function __construct($marca, $modelo, $sistemaOperativo, $memoriaInterna, $camaraMP) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->memoriaInterna = $memoriaInterna;
        $this->camaraMP = $camaraMP;
    }

    public function obtenerMarca() {
        return "Marca: $this->marca";
    }

    public function obtenerModelo() {
        return "Modelo: $this->modelo";
    }

    public function obtenerSistema() {
        return "Sistema operativo: $this->sistemaOperativo";
    }

    public function obtenerMemoria() {
        return "Memoria interna: $this->memoriaInterna GB";
    }

    public function obtenerCamara() {
        return "Cámara: $this->camaraMP MP";
    }
}

// Crear objetos
$u = new Universidad("Unidades Tecnológicas De Santander", "Bucaramanga", "Publica", 35000, true);
$c = new Colegio("Instituto Tecnologico Salesiano Eloy Valenzuela", "Bachilerato", "Comuna 4", 24, "Mañana");
$cel = new Celular("Apple", "iPhone 14", "iOS", 128, 48);

// Imprimir un método de cada objeto
echo $u->obtenerNombre() . "<br>";
echo $c->obtenerNivel() . "<br>";
echo $cel->obtenerModelo() . "<br>";
?>