<?php
/** @var string $content */
/** @var string $currentGenre */
/** @var string $currentPage */
/** @var array $genres */
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Semenov Vladislav</title>
	<link rel="stylesheet" href="./resources/css/reset.css">
	<link rel="stylesheet" href="./resources/css/style.css">
	<link rel="stylesheet" href="./resources/css/filmpage_style.css">
</head>
<body>
<div class="wrapper">
	<div class="sidebar">
		<div class="logo">
			<img src="./resources/images/logo.svg" alt="Bitflix">
		</div>
		<ul class="menu">
			<li class="item <?=$currentGenre===NULL&&$currentPage==='index'?'item--active':''?>">
				<a href="index.php">Главная</a>
			</li>
			<?php foreach($genres as $code=>$name):?>
			<li class="item <?=$code===$currentGenre?'item--active':''?>">
				<a href="index.php?genre=<?=$code?>"><?= $name ?></a>
			</li>
			<?php endforeach;?>
			<li class="item <?=$currentGenre===NULL&&$currentPage==='favourite'?'item--active':''?>">
				<a href="favourite.php">Избранное</a>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="header">
			<div class="header-bar">
				<div class="search">
					<div class="search-bar">
						<div class="search-icon"></div>
						<input type="search" class="search-line" placeholder="Поиск по каталогу...">
					</div>
					<a href="#" class="search-button">ИСКАТЬ</a>
				</div>
				<a href="addmovie.php" class="add-movie-button">добавить фильм</a>
			</div>
		</div>
		<?= $content ?>
	</div>
</div>
</body>
</html>