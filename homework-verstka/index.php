<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */

require_once "./data/movies/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";

if(isset($_GET['genre']))
{
	$currentGenre=$_GET['genre'];
	$movies=getMoviesByGenre($movies, $genres, $currentGenre);
}
else
{
	$currentGenre='';
}

$main=renderTemplate("./resources/pages/main.php", [
	'movies'=>$movies
]);

// render layout
renderLayout($main, [
	'genres'=>$genres,
	'currentGenre'=>$currentGenre,
	"currentPage"=>getFileName(__FILE__)
]);