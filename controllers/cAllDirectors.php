<?php

include_once '../models/connect_data.php';
include_once '../models/directorClass.php';
include_once '../models/directorModel.php';

$allDirectors = new directorModel();
$listDirectors = $allDirectors->returnAllDirectorList();


include_once '../views/allDirectors.php';
