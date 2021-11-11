<?php
/** @var array $movie */
?>

<div class="movie-list--item-overlay">
	<a href="<?="film.php?id=".$movie['id']?>" class="movie-list--item-more">Подробнее</a>
</div>
<div class="movie-list--item-image" style="background-image: url(./resources/movie_img/<?=$movie['id']?>.jpg)"></div>
<div class="movie-list--item-head">
	<div class="movie-list--item-title"><?=makeTitle($movie['title'], $movie['release-date'])?></div>
	<div class="movie-list--item-subtitle"><?=$movie['original-title']?></div>
	<div class="movie-list--item-wrapper"></div>
</div>
<div class="movie-list--item-description"><?=shortString($movie['description'], 300)?></div>
<div class="movie-list--item-bottom">
	<div class="movie-list--item-time">
		<div class="movie-list--item-time--icon"></div>
		<?=getDurationStr($movie['duration'])?>
	</div>
	<div class="movie-list--item-genre"><?=shortString(makeStrOutOfArray($movie['genres']), 50)?></div>
</div>