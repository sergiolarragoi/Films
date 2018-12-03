<?php

class directorModel extends directorClass {

    private $link;
    private $list = array();

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

    public function returnAllDirectorList() {
        $this->OpenConnect();
        $sql = "CALL spAllDirectors()";

        $result = $this->link->query($sql);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $new = new self();
            $new->setIdDirector($row['idDirector']);
            $new->setNombreDirector($row['NombreDirector']);

            array_push($this->list, $new);
        }
        mysqli_free_result($result);
        $this->CloseConnect();
        return $this->list;
    }

}
