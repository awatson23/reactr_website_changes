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
            <li><a href="/">Home</a></li>
            <li><a href="/team">Team</a></li>
            <li><a href="/archive">Projects</a></li>
            <li><a href="{{ action("ProjectsController@home") }}#contactUs">Contact</a></li>
            <li><a href="{{ action("ProjectsController@home") }}#contactUs">Partner</a></li>
					</ul>
				</nav>

			</div>
		</header>
