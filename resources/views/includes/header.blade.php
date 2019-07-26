<!-- the header style comes from the controller and chenges the colour based on the view it returns to  -->
<header id="singleHeader" class="header" @if (isset($headerStyle))style="{{$headerStyle}}" @endif>
			<div class="content">

				<div id="logoSpace">
					<a href="/"><img src="/images/reactr.svg" alt="reactr logo" width="191"></a>
				</div>

				<div class="hamburgerContainer">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>

				<nav id="mainNav" @if (isset($headerStyle))style="{{$headerStyle}}" @endif>
					<h2 class="hide">Main Navigation</h2>
					<ul class="navList">
            <li><a href="/" @if (isset($activeHome))class="{{$activeHome}}" @endif>Home</a></li>
            <li><a href="/team" @if (isset($activeAbout))class="{{$activeAbout}}" @endif>About</a></li>
			<li><a href="/archive" @if (isset($activeProjects))class="{{$activeProjects}}" @endif>Projects</a></li>
			<li><a href="/careers" @if (isset($activeCareers))class="{{$activeCareers}}" @endif>Careers</a></li>
			<li><a href="/partner" @if (isset($activePartner))class="{{$activePartner}}" @endif">Partner</a></li>
			<li><a href="/contact" @if (isset($activeContact))class="{{$activeContact}}" @endif>Contact</a></li>
			</nav>

			</div>
		</header>
