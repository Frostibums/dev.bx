<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */

require_once "./data/movies/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";


if(isset($_GET['id']))
{
	$movie=getMovieById($movies, (int)$_GET['id']);
}

if(!isset($_GET['id'])||$movie==[])
{
	header('Location: index.php');
}

$filmpage=renderTemplate("./resources/pages/filmpage.php", [
	'movie'=>$movie
]);

// render layout
renderLayout($filmpage, [
	'genres'=>$genres,
	'currentGenre'=>'',
	"currentPage"=>getFileName(__FILE__)
]);