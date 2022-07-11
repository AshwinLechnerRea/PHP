<?php
	require_once 'includes/pages.php';
	
	if (isset($_GET['page']) && !empty($_GET['page'])){
		if (array_key_exists($_GET['page'], $pages)){
			$page = $_GET['page'];
		} else {
			$page = 'notfound';
		}
	} else {
		$page = 'home';
	}
	
	if (isset($_GET['lang']) && !empty($_GET['lang'])){
		if (array_key_exists($_GET['lang'], $pages[$page]['title'])){
			$lang = $_GET['lang'];
		} else {
			/* Als de taal niet bestaat wordt automatisch Nederlands gepakt */
			$lang = 'nl';
		}
	} else {
		$lang = 'nl';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$pages[$page]['title'][$lang];?></title>
		<base href="http://localhost/php/slugs/opdracht4/" target="_self">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div id="container">
			<nav>
			</nav>
			<section>
				<h1><?=$pages[$page]['title'][$lang];?></h1>
				<p><?=$pages[$page]['content'][$lang];?></p>
			</section>
		</div>
	</body>
</html>