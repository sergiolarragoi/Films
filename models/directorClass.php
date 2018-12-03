<?php

class directorClass {

    protected $idDirector;
    protected $NombreDirector;

    # Getter and Setter.

    function getIdDirector() {
        return $this->idDirector;
    }

    function getNombreDirector() {
        return $this->NombreDirector;
    }

    function setIdDirector($idDirector) {
        $this->idDirector = $idDirector;
    }

    function setNombreDirector($NombreDirector) {
        $this->NombreDirector = $NombreDirector;
    }

}
