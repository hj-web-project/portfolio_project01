<!doctype html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <!-- Viewport -->
    <meta name="viewport" id="meta_viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=10">
	<meta property="og:image" content="images/w_ogimg.png">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:title" content="Portfolio">
	<meta property="og:description" content="Portfolio">
	<meta property="og:site_name" content="Portfolio">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Flip.min.js"></script>

    <!-- Lenis -->
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>

    <!-- ScrollOut -->
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
    <!-- Three.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.min.js"></script>

	<script src="https://unpkg.com/splitting@1.0.6/dist/splitting.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/splitting@1.0.6/dist/splitting.css" />
	<link rel="stylesheet" href="https://unpkg.com/splitting@1.0.6/dist/splitting-cells.css" />

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
	
	
	<?php if (basename($_SERVER['PHP_SELF']) === 'index.php') { ?>

		<!-- index.php -->
		<link rel="stylesheet" href="css/assets.css">
		<link rel="stylesheet" href="css/common.css">
		<script src="js/main.js"></script>

	<?php } else { ?>

		<!-- 그 외 페이지 -->
		<link rel="stylesheet" href="../css/assets.css">
		<link rel="stylesheet" href="../css/common.css">
		<script src="../js/main.js"></script>

	<?php } ?>
	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JZTC8JB4ZD"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-JZTC8JB4ZD');
	</script>
</head>

<body>

	<?php if (basename($_SERVER['PHP_SELF']) === 'index.php') { ?>

	<header class="header">
		<div class="inner__cen1600">
			<nav class="main__mnav__wr">
				<a href="#main-contents-wr00">HOME</a>
				<a href="#main-contents-wr01">ABOUT</a>
				<a href="#main-contents-wr02">WORK</a>
				<a href="#main-contents-wr03">STACK</a>
				<a href="#main-contents-wr04">CONTACT</a>
			</nav>
		</div>
	</header>

	<?php } else { ?>
	<header class="header" id="sub-header">
		<div class="inner__cen1600">
			<nav class="main__mnav__wr">
				<a href="../">HOME</a>
				<a href="../#main-contents-wr01">ABOUT</a>
				<a href="../#main-contents-wr02">WORK</a>
				<a href="../#main-contents-wr03">STACK</a>
				<a href="../#main-contents-wr04">CONTACT</a>
			</nav>
		</div>
	</header>

	<?php } ?>
	
	<div class="wrap">


