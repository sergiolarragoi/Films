<?php

include_once '../models/connect_data.php';
include_once '../models/directorClass.php';
include_once '../models/directorModel.php';
include_once '../models/peliculaClass.php';
include_once '../models/peliculaModel.php';

$allFilmsDirector = new peliculaModel();
$listFilms = $allFilmsDirector->returnAllFilmsWithDirector();


include_once '../views/allFimlsWithDirector.php';
