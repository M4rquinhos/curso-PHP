<?php
    class Persona {
        public $nombre;
        public $apellido;

        public function __construct($nombre, $apellido) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

    }

    class Alumno extends Persona {
        public $grupo;

        public function __construct($nombre, $apellido, $grupo){
            parent::__construct($nombre, $apellido);
            $this->grupo = $grupo;
        }

        public function getGrupo() {
            return $this->grupo;
        }

        public function getFullName() {
            return $this->nombre . " " . $this->apellido;
        }
    }


    $persona1 = new Persona("Juan", "Perez");
    print_r($persona1);
    echo "<br>";
    $alumno1 = new Alumno("Saul", "Hernandez", "A");
    print_r($alumno1);
    echo "<br>";
    // echo $alumno1->getGrupo();
    // echo "El alumno $alumno1->nombre $alumno1->apellido pertenece al grupo de la seccion: ".$alumno1->getGrupo();

    echo "<br>";
    echo $alumno1->getFullName();
    echo "<br>";

