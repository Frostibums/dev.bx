<?php
/** @var array $movie */
?>

<div class="filmpage">
	<div class="filmpage-head">
		<div class="filmpage-head-titles">
			<div class="filmpage-head-title" id="head-title"><?=makeTitle($movie['title'], $movie['release-date'])?></div>
			<div class="filmpage-head-sub">
				<div class="filmpage-head-subtitle"><?=$movie['original-title']?></div>
				<div class="filmpage-head-sub-restriction"><?=$movie['age-restriction']."+"?></div>
			</div>
		</div>
		<div class="filmpage-head-like" id="like"></div>
	</div>
	<div class="filmpage-content">
		<div class="filmpage-content-poster">
			<div class="filmpage-content-poster-image" style="background-image: url(./resources/movie_img/<?=$movie['id']?>.jpg)"></div>
		</div>
		<div class="filmpage-content-info">
			<div class="filmpage-content-info-rating">
				<div class="filmpage-content-info-rating-squares">
					<?=printSquare($movie['rating']);?>
				</div>
				<div class="filmpage-content-info-rating-digit"><?=$movie['rating']?></div>
			</div>
			<div class="filmpage-content-info-about"> О фильме
				<table class="filmpage-content-info-about-table">
					<tr>
						<td class="table-leftside">Год производства:</td>
						<td class="table-rightside"><?=$movie['release-date']?></td>
					</tr>
					<tr>
						<td class="table-leftside">Режиссер:</td>
						<td class="table-rightside"><?=$movie['director']?></td>
					</tr>
					<tr>
						<td class="table-leftside">В главных ролях:</td>
						<td class="table-rightside"><?=implode(', ', $movie['cast'])?></td>
					</tr>
				</table>
			</div>
			<div class="filmpage-content-info-description"> Описание
				<div class="filmpage-content-info-description-text"><?=$movie['description']?></div>
			</div>
		</div>
	</div>
	<div class="notify" id="notify"></div>
</div>

<script src="./resources/js/scripts.js"></script>

</body>
</html>