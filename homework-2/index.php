<?php

/** @var array $movies */
require "./movies/movies (1).php";
require "functions.php";
require "./homework-2-functions/homework-2-functions.php";

$userAge=readline("Enter your age: ");
checkAgeValid((int)$userAge);
$suggestedMovies=createSuggested($movies, (int)$userAge);
printSuggested($suggestedMovies);