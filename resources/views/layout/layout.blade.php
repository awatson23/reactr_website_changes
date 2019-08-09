<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Heebo:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/animations.css">

	<!-- siema js -->
	<script src="/js/siema/siema.min.js"></script>
	<style>
	.awardTitle {
		color:#e65e79;
		font-size:16px;
	}
	.awardDesc {
		color:#000;
		font-size:14px;
		font-style: italic;
	}
</style>
</head>
<body>

	<h1 class="hide">@yield('page')</h1>
	<main id="mainContainer">

		@include('includes.header')

		@yield('content')

		@include('includes.footer')

	</main>
	<!-- scrollMagic/gsap pairing animation js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>

	<!-- greensock animation js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/CSSPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/easing/EasePack.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineMax.min.js"></script>
	<!-- mobile menu js -->
	<script src="/js/mobileMenu.js"></script>
	<!-- page specific js -->
	@yield('pagescript')
</body>
</html>
