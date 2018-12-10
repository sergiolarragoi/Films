<?php

class peliculaModel extends peliculaClass {

    private $link;
    private $list = array();
    private $objectDirector;
    private $listActores = array();

    # Open and close methods.

    public function OpenConnect() {
        $konDat = new connect_data();
        try {
            $this->link = new mysqli($konDat->host, $konDat->userbbdd, $konDat->passbbdd, $konDat->ddbbname);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $this->link->set_charset("utf8");
    }

    public function CloseConnect() {
        mysqli_close($this->link);
    }

    # Model functions.

    public function returnAllFilmList() {
        $this->OpenConnect();
        $sql = "CALL spAllFilms()";

        $result = $this->link->query($sql);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $new = new self();
            $new->setIdPelicula($row['idPelicula']);
            $new->setTituloPelicula($row['TituloPelicula']);

            array_push($this->list, $new);
        }
        mysqli_free_result($result);
        $this->CloseConnect();
        return $this->list;
    }
    
    public function returnFilmDetails($idFilm) {
        
        $this->OpenConnect();
        $sql = "CALL spFilmDetails()";

        $result = $this->link->query($sql);
        
    }

    public function returnAllFilmsWithDirector() {
        $this->OpenConnect();
        $sql = "call spAllFilmsWithDirector()";
        $result = $this->link->query($sql);
        $this->CloseConnect();
        while ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {

            $new = new self();
            $new->setIdPelicula($row['idPelicula']);
            $new->setTituloPelicula($row['TituloPelicula']);
            $new->setAnio($row['Anio']);
            $new->setDirector($row['Director']);
            $new->setCartel($row['cartel']);

            $new->objectDirector = new directorModel();
            $new->objectDirector->setIdDirector($row['Director']);
            $new->objectDirector->setNombreDirector($row['NombreDirector']);

            array_push($this->list, $new);
        }
        return $this->list;
    }

}
