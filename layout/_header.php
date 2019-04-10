<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pl">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title></title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,500,700&amp;subset=latin-ext"
		rel="stylesheet">

	<link rel="stylesheet" href="./assets/css/normalize.min.css" />
	<link rel="stylesheet" href="./assets/css/flexboxgrid.min.css" />
	<link rel="stylesheet" href="./assets/css/glightbox.min.css" />
	<link rel="stylesheet" href="./assets/css/main.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

	<!--[if lt IE 8]>
			<p class="browserupgrade">
				You are using an <strong>outdated</strong> browser. Please
				<a href="http://browsehappy.com/">upgrade your browser</a> to improve
				your experience.
			</p>
		<![endif]-->

	<div class="fixed-menu">
		<h4 class="js-contact-modal"><?= $contentModule->getTranslate('nav.contact_us', true) ?></h4>
		<?php if ($__PAGE_NAME__ === 'index'): ?>
		<nav>
			<ul class="js-set-active">
				<li class="active"><a href="#section-1">01</a></li>
				<li><a href="#section-2">02</a></li>
				<li><a href="#section-3">03</a></li>
				<li><a href="#section-4">04</a></li>
				<li><a href="#section-5">05</a></li>
				<li><a href="#section-6">06</a></li>
				<li><a href="#section-7">07</a></li>
			</ul>
		</nav>
	<?php endif;?>
	</div>
