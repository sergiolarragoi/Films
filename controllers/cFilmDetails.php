<?php

include_once '../models/connect_data.php';
include_once '../models/peliculaClass.php';
include_once '../models/peliculaModel.php';

$idFilm = filter_input(INPUT_GET, 'cmbFilms');

$allFilms = new peliculaModel();
$listFilms = $allFilms->returnFilmDetails($idFilm);

