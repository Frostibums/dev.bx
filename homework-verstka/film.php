<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */

require_once "./data/movies/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";

if(isset($_GET['id']))
{
	$id=(int)$_GET['id']-1;
}
$currentGenre=($_GET['genre']);

$filmpage=renderTemplate("./resources/pages/filmpage.php", [
	'movie'=>$movies[$id]
]);

// render layout
renderLayout($filmpage, [
	'genres'=>$genres,
	'currentGenre'=>$currentGenre,
	"currentPage"=>getFileName(__FILE__)
]);