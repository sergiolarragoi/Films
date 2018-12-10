<?php

include_once '../models/connect_data.php';
include_once '../models/peliculaClass.php';
include_once '../models/peliculaModel.php';

$allFilms = new peliculaModel();
$listFilms = $allFilms->returnAllFilmList();


include_once '../views/allFilms.php';
