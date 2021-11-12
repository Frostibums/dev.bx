<?php
declare(strict_types=1);
/** @var array $movies */
/** @var array $genres */

require_once "./data/movies/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";



// render layout
renderLayout("There is nothing yet", [
	'genres'=>$genres,
	'currentGenre'=>'',
	"currentPage"=>getFileName(__FILE__)
]);