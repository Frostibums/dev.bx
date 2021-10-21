<?php

function checkAgeValid(int $userAge):void{
	if(!is_numeric($userAge)||$userAge<0)
	{
		printMessage("Wrong age.");
		exit();
	}
}

function formatMovie(array $movie):string{
	return "{$movie["title"]} ({$movie["release_year"]}), {$movie["age_restriction"]}+. Rating - {$movie["rating"]}";
}

function isMovieAllowed(array $movie, int $userAge):bool{
	return $movie["age_restriction"]<=$userAge;
}

function printSuggested(array $movies, int $userAge):void
{
	$counter=0;
	foreach ($movies as $movie)
	{
		if (isMovieAllowed($movie, $userAge))
		{
			$counter++;
			$formatedMovie=formatMovie($movie);
			printMessage("{$counter}. {$formatedMovie}");
		}
	}
}