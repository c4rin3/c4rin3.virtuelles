<?php
	//Tableau des pages autorisées à l'include
	$pagesOK = array (
			'empty' => 'project/empty.html', 'about' => 'project/about.html',
			'portfolio' => 'project/portfolio.html', 'hypnose' => 'project/hypnose.html',
			'arviprom' => 'project/arviprom.html', 'printr' => 'project/printr.html',
			'doueeprlerreur' => 'project/doueeprlerreur.html', 'knownav' => 'project/knownav.html',
			'wave' => 'project/wave.html', 'vertigo' => 'project/vertigo.html',
			'strangemirror' => 'project/strangemirror.html', 'widget' => 'project/widget.html',
			'miscellanee' => 'project/miscellanee.html', 'bugface' => 'project/bugface.html', 
			'meandyou' => 'project/meandyou.html', 'shadowbox' => 'project/shadowbox.html',
			'1700x10' => 'project/1700x10.html', 
			'bugs' => 'project/bugs.html', 'carton_esac' => 'project/carton_esac.html' ,
			'wtf' => 'project/wtf.html', 'asciiedition' => 'project/asciiedition.html',
			'asciifont' => 'project/asciifont.html', 'volatileedition' => 'project/volatileedition.html',
			'volatile' => 'project/volatile.html', 'splashscreen' => 'project/splashscreen.html',
			'bitmap' => 'project/bitmap.html', 'data' => 'project/data.html', 'hotkeys' => 'project/hotkeys.html',
			'ale' => 'project/ale.html', 'essentiels' => 'project/essentiels.html'
	);
	//par defaut
	$page = 'empty';
	//Si le $_GET['page'] existe dans le tableau $pagesOK
	if(!empty($_GET['page'])
	&& array_key_exists($_GET['page'], $pagesOK)) {
		//Remplace la valeur par defaut par celle de l'URL
		$page = $_GET['page'];
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<html lang="fr">
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Carine Bigot | Graphiste multimédia</title>
	<meta name="description" content="Carine Bigot | Graphiste multimédia">
	<meta name="author" content="Carine Bigot">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/slideshow.css">
	<link rel="stylesheet" href="css/thb.css">	
	<link rel="stylesheet" href="css/pace.css">
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
	<!--Google Analytics-->
	<?php include_once("analyticstracking.php") ?>

	<!-- container -->
	<div class="container">
		<!-- HEADER -->
		<header>
			<?php
				include('header.php');
			?>
		</header>

		<!-- DETAIL PROJET -->
		<div id="project" class="two-thirds column">
			<?php include($pagesOK[$page]); ?>
		</div>

		<!-- NAVIGATION GRILLE MENU/IMG -->
		<div id="nav">
			<?php include('nav.php'); ?>
		</div>

		<!-- INFOS/LIENS - FOOTER -->
		<div id="footer">
			<?php include('footer.php'); ?>
		</div>

		<!-- page border -->
		<div id="right"></div>
		<div id="left"></div>
		<div id="top"></div>
		<div id="bottom"></div>
	</div><!-- End container -->
	
	<!-- SCRIPT -->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="js/jquery-1.10.2.min.js" defer="true"></script>
	<script src="js/navigation.js" defer="true"></script>
	<script src="js/responsiveslides.min.js" defer="true"></script>
	<script src="js/pace.min.js"></script>
	<!-- End SCRIPT -->
</body>
</html>