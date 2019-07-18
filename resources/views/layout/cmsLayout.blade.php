<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Heebo:300,400,700" rel="stylesheet">
	<link href="/css/cms.css" rel="stylesheet">

	<title>reactr CMS</title>
</head>
<body>

	@if

@elseif

@else

	@endif

	<main id="mainContainer">
		@include('includes.cmsSide')
		@yield('cmsContent')
	</main>
	
	@yield('cmsScript')
</body>
</html>
