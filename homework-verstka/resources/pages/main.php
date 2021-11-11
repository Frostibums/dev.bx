<?php
/** @var array $movies */
/** @var array $genres */
/** @var string $currentGenre */
?>

<div class="content">
			<div class="movie-list">
				<?php foreach ($movies as $movie): ?>
				<?php if($currentGenre===NULL||isGenreInMovie($genres[$currentGenre],$movie['genres'])):?>
					<div class="movie-list--item">
						<?= renderTemplate("./resources/blocks/_movie.php", ['movie' => $movie]) ?>
					</div>
				<?php endif;?>
				<?php endforeach; ?>
			</div>
		</div>