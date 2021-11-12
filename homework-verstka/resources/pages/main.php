<?php
/** @var array $movies */
?>

<div class="content">
			<div class="movie-list">
				<?php foreach ($movies as $movie): ?>
					<div class="movie-list--item">
						<?= renderTemplate("./resources/blocks/_movie.php", ['movie' => $movie]) ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>