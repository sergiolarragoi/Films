<?php

class peliculaClass {

    protected $idPelicula;
    protected $TituloPelicula;
    protected $Anio;
    protected $Director;
    protected $cartel;

    # Getter and Setter.
    
    function getIdPelicula() {
        return $this->idPelicula;
    }

    function getTituloPelicula() {
        return $this->TituloPelicula;
    }

    function getAnio() {
        return $this->Anio;
    }

    function getDirector() {
        return $this->Director;
    }

    function getCartel() {
        return $this->cartel;
    }

    function setIdPelicula($idPelicula) {
        $this->idPelicula = $idPelicula;
    }

    function setTituloPelicula($TituloPelicula) {
        $this->TituloPelicula = $TituloPelicula;
    }

    function setAnio($Anio) {
        $this->Anio = $Anio;
    }

    function setDirector($Director) {
        $this->Director = $Director;
    }

    function setCartel($cartel) {
        $this->cartel = $cartel;
    }

}
