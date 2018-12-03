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

    public function returnAllFilmsWithDirector() {
        
    }

}
