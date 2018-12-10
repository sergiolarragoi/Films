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



}
