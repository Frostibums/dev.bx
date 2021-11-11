<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */

require_once "./data/movies/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";

$currentGenre=($_GET['genre']);

$main=renderTemplate("./resources/pages/main.php", [
	'movies'=>$movies,
	'genres'=>$genres,
	'currentGenre'=>$currentGenre
]);

// render layout
renderLayout($main, [
	'genres'=>$genres,
	'currentGenre'=>$currentGenre,
	"currentPage"=>getFileName(__FILE__)
]);