<?php

function shortString(string $str, int $length):string{
	return substr($str, 0, strrpos(substr($str, 0, $length), ' ')).'...';
}

function makeTitle(string $title, string $date):string{
	return "{$title} ({$date})";
}

function makeShortTitle(string $title, string $date):string{
	if(mb_strlen($title)>20)
	{
		return mb_substr($title, 0, 20).'...';
	}
	if(mb_strlen("{$title} ({$date})")>23)
	{
		return $title;
	}
	return "{$title} ({$date})";
}

function getDurationStr(int $duration):string{
	$hours=floor($duration/60);
	$minutes=$duration%60;
	return "{$duration} мин./ {$hours}:{$minutes}";
}

function printSquare(float $rating):string{
	$result='';
	for ($i=0; $i<10; $i++)
	{
		if((int)floor($rating)>$i)
		{
			$result="{$result}<div class=\"filmpage-content-info-rating-square square--active\"></div>";
		}
		else
		{
			$result="{$result}<div class=\"filmpage-content-info-rating-square\"></div>";
		}
	}
	return $result;
}

function isGenreInMovie(string $genre, array $movieGenres):bool{
	foreach ($movieGenres as $movieGenre)
	{
		if($genre==$movieGenre)
		{
			return true;
		}
	}
	return false;
}

function getMoviesByGenre(array $movies, array $genres, string $genre):array{
	$result=[];
	foreach ($movies as $movie)
	{
		if(isGenreInMovie($genres[$genre], $movie['genres'])){
			$result[]=$movie;
		}

	}
	return $result;
}

function getMovieById(array $movies, int $id):array{
	foreach ($movies as $movie)
	{
		if($id==$movie['id'])
		{
			return $movie;
		}
	}
	return [];
}