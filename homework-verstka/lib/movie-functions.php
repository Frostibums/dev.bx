<?php

function shortString(string $str, int $length):string{
	return substr($str, 0, strrpos(substr($str, 0, $length), ' ')).'...';
}

function makeTitle(string $title, string $date):string{
	return "{$title} ({$date})";
}

function makeStrOutOfArray(array $arr):string{
	$result='';
	foreach ($arr as $value)
	{
		$result="{$result}, {$value}";
	}
	return substr($result,2);
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