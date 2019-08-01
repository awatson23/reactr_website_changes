@extends('layout.layout')

@section('title', 'Reactr')

@section('page', 'Reactr')

@section('content')
<h1 class="hide">Reactr Home Page</h1>
<div id="ieAlert">
        <p id="ieClose">x</p>
        <p class="subTitle">Hi there!</p>

        <p class="copy">We've noticed you're using a version of Internet Explorer. For a better user experience, we recommend upgrading to a more modern browser.</p>

			  <div class="button">
            <a class="smallTitle">Okay, Got it!</a>
        </div>
</div>

<section id="hero">
	<h2 class="hide">We Are Reactr.</h2>
	<div class="content">

		<div class="videoOverlay">
			
		</div>

		<div id="heroText">
			<div id="heroBlurb">
				<p class="title">We Are Reactr.</p>
				<p class="copy">An experiential program at Fanshawe that links student teams with companies to develop Web and digital media solutions.</p>
			</div>

			<div id="heroLinks">
				<div class="hireUs button hvr-grow-shadow"><a href="/partner">HIRE US</a></div>
				<div id="join" class="button hvr-radial-out"><a href="/careers">JOIN OUR TEAM</a></div>
			</div>
		</div>

		<div id="heroVideo">
               
                <iframe src="https://player.vimeo.com/video/213679775?background=1&autoplay=1&loop=1&muted=1" width="100%" height="100%" frameborder="0" allow="fullscreen" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                <p><a href="https://vimeo.com/213679775"></a><a href="https://vimeo.com/user65576705"></a><a href="https://vimeo.com"></a>   
            
        </div>

		<!-- <div id="heroImage">
			<img src="images/hero.png" alt="hero image">
		</div>
 -->
	</div>
</section>

<section id="whoWeAre">
	<h2 class="hide">Who We Are</h2>

	<div id="top">
		<p id="weAre" class="subTitle">WHO WE ARE</p>
		<p id="weAreCopy" class="copy">Reactr is the applied research team in the Interactive Media programs at Fanshawe College. We work collaboratively with companies on Web and digital media projects.</p>
		<p class="learnMore">LEARN MORE <span class="arrow"> &#9002;</span></p>
	</div>


	<div id="learnMoreModal">
		<p id="closeModal">x</p>

		<ul>
			<li>Reactr project teams are 100% student-driven. </li>
        	<li>Students gain valuable professional experience working on dedicated projects. </li>
      		<li>Students are guided and supervised by faculty and staff with years of design and development experiences.</span>  </li>
        	<li>Collaborative projects are often grant-funded through OCE, NSERC and other agencies. Or self-funded by the client company.</li>
		</ul>
	</div>
</section>


<section id="projectsWindow">
	<h2 class="hide">Latest Projects</h2>

	<div class="content">
		@foreach ($projects as $project)
		<div class="projectTile">
			<div class="tileInfo">
				<div class="tileText">
					<!-- <p class="subTitle">{{$project->project_type}}</p> -->
					<p class="projectTitle">{{$project->project_name}}</p>
				</div>
				<a href="/details/{{$project->project_id}}" class="learnMore">VIEW PROJECT<span> &#9002;</span></a>
			</div>
			<div class="tileImage">
				<a href="/details/{{$project->project_id}}">
				<img src="images/{{$project->project_homeImg}}" alt="mockup 2"></a>
			</div>
		</div>
		@endforeach

	</div>
</section>


<section id="offer">
	<h2 class="hide">What We Offer</h2>


	<div class="mainOffer">
		<p class="subTitle">WHAT WE OFFER</p>
		<p class="copy">Each Reactr project is developed by a team of students dedicated to that project, </br> supervised and supported by Fanshawe faculty and staff.</p>
		<p class="copy">The work that we undertake falls into these main categories:</p>
		<div id="offerButton" class="hireUs button hvr-grow-shadow"><a href="#contactUs">WORK WITH US</a></div>
	</div>

	<div class="content">

		<div id="design" class="offer">
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    /*stroke: #f85177;*/
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    /*fill: #f85177;*/
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_design</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<g id="design">
				<rect class="cls-1" x="20.5" y="9" width="12" height="11"/>
				<circle class="cls-1" cx="34.5" cy="19" r="6"/>
				</g>
			</svg>
			<!-- <img src="images/icon_design.svg" alt="web design icon" width="60"> -->
			<p class="smallTitle">WEB DESIGN and development</p>
			<p class="copy">Creation of a customized informational Web site for a company, with content management features.</p>
		</div>

		<div id="development" class="offer">
			<!-- <img src="images/icon_development.svg" alt="web development icon" width="60"> -->
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2, .cls-3 {
				    fill: #fff;
				  }

				  .cls-3 {
				    font-size: 16.85px;
				    font-family: Ubuntu-Bold, Ubuntu;
				    font-weight: 700;
				  }
				</style>
				</defs>
				<title>icon_development</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<text class="cls-3" transform="translate(17.25 21.35)">&lt;/&gt;</text>
			</svg>
			<p class="smallTitle">large scale web application development</p>
			<p class="copy">Planning and building of a complex, Web-based application to address more specific company needs.</p>
		</div>

		<div id="branding" class="offer">
			<!-- <img src="images/icon_branding.svg" alt="branding icon" width="73"> -->
			<svg id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.25 55.25">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_branding</title>
				<polyline class="cls-1" points="43 49 43 54.25 1 54.25 1 1 43 1 43 28"/>
				<rect class="cls-1" x="30" y="27.63" width="42.25" height="21.63"/>
				<rect class="cls-1" x="47.88" y="1.88" width="24.38" height="14.75"/>
				<circle class="cls-2" cx="10.53" cy="12.03" r="2.78"/>
				<line class="cls-1" x1="17.69" y1="12.03" x2="33.25" y2="12.03"/>
				<circle class="cls-2" cx="38.45" cy="36.58" r="2.78"/>
				<line class="cls-1" x1="45.6" y1="36.58" x2="61.17" y2="36.58"/>
				<circle class="cls-2" cx="60" cy="9.25" r="2.78"/>
			</svg>

			<p class="smallTitle">Graphic design and BRANDING</p>
			<p class="copy">The Reactr team works with a company to create a design and branding document for Web and print use.</p>
		</div>

		<div id="software" class="offer">
			<!-- <img src="images/icon_software.svg" alt="software icon" width="60"> -->
			<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54.5">
				<defs>
				<style>
				  .cls-1 {
				    fill: none;
				    stroke: #fff;
				    stroke-miterlimit: 10;
				    stroke-width: 2px;
				  }

				  .cls-2 {
				    fill: #fff;
				  }
				</style>
				</defs>
				<title>icon_software</title>
				<rect class="cls-1" x="1" y="1" width="59" height="40.5" rx="5.94" ry="5.94"/>
				<line class="cls-1" x1="1" y1="31" x2="60" y2="31"/>
				<circle class="cls-2" cx="30.5" cy="36.5" r="1.5"/>
				<line class="cls-1" x1="24" y1="49.5" x2="26.5" y2="41.5"/>
				<line class="cls-1" x1="34.5" y1="41.5" x2="37" y2="49.5"/>
				<rect class="cls-1" x="16" y="49.5" width="29" height="4"/>
				<circle class="cls-1" cx="30.5" cy="16.5" r="10"/>
				<path class="cls-1" d="M372.73,666v-8.62a1.38,1.38,0,0,0-1.38-1.38h-2.12" transform="translate(-344.5 -639.5)"/>
				<path class="cls-1" d="M375.88,666V652.9a1.48,1.48,0,0,0-1.38-1.57h-2.12" transform="translate(-344.5 -639.5)"/>
				<path class="cls-1" d="M378.31,665.25V657.6c0-1.11.62-2,1.38-2h.54" transform="translate(-344.5 -639.5)"/>
				<circle class="cls-1" cx="24.16" cy="16.5" r="1.5"/>
				<circle class="cls-1" cx="36.93" cy="16.1" r="1.5"/>
				<circle class="cls-1" cx="27.16" cy="11.83" r="1.5"/>
			</svg>
			<p class="smallTitle">digital media consultation and planning</p>
			<p class="copy">Planning meetings with a company to define a longer-term digital strategy and development  timelines.</p>
		</div>
	</div>
</section>


<section id="whyHire">
	<h2 class="hide">Why Hire Us</h2>


	<div class="content">

		<div class="visibleContent">

			<div class ="mainHire">

				<div class="reason hireImage">
					<img src="images/mock_hire.png" alt="multi-screen mockups">
				</div>


				<div class="reason hireBlurb">

					<p class="subTitle">Why Work With Reactr</p>
					<p class="copy">While partnering with Reactr on digital media projects can certainly be cost-effective, there are other ways a company partner can benefit from collaboration</p>


					<div id="hireLinks">

						<div class="hireUs button hvr-grow-shadow"><a href="/partner">WORK WITH US</a></div>
						<a href="#" onclick="return false" class="smallTitle" id="moreLink">read more</a>

					</div>

				</div>

			</div>

		</div>


		<div class="hiddenContent">

			<div id="reasonContainer">

				<div id="reason1">
					<p class="title">1.</p>
					<p class="smallTitle">connect with talented students</p>
					<p class="copy">Reactr students graduate with a very desirable skill set; they represent an ideal hire for supporting Web and digital media growth in any company.</p>
				</div>

				<div id="reason2">
					<p class="title">2.</p>
					<p class="smallTitle">access development grants for collaborative projects</p>
					<p class="copy">Reactr projects are funded through grants from government agencies such as NSERC and OCE, providing opportunities for companies to enhance their digital media capacity.</p>
				</div>

				<div id="reason3">
					<p class="title">3.</p>
					<p class="smallTitle">provide enhanced experiences for students</p>
					<p class="copy"> Reactr projects represent unique experiences for students to gain real-world skills; every partnership increases the opportunities for our students.</p>
				</div>

				<div id="reason4">
					<p class="title">4.</p>
					<p class="smallTitle">work with a team dedicated to you rproject</p>
					<p class="copy">Teams are selected from recommended students in our programs, through interviews and skill tests. One student team works on one project for its duration.</p>
				</div>

				<a href="#whyHire" id="readLess">x</a>
			</div>

		</div>

	</div>
</section>


<section id="numbers">
	<h2 class="hide">The Numbers Don't Lie</h2>

	<div class="content">
		<p class="title">The Numbers Don't Lie.</p>

		<div id="statsContainer">

			<div class="statNumber">
				<p class="stat" id="sponsNum">400K</p>
				<p class="smallTitle">in sponsorships and funding.</p>
			</div>

			<div class="statNumber">
				<p class="stat" id="projNum">34</p>
				<p class="smallTitle">projects completed.</p>
			</div>

			<div class="statNumber">
				<p class="stat" id="jobNum">72</p>
				<p class="smallTitle">jobs created for students.</p>
			</div>

			<div class="statNumber">
				<p class="stat" id="alumNum">95%</p>
				<p class="smallTitle">alumni who were hired after grad.</p>
			</div>
		</div>

		<div id="testimonials">

			<p class="subTitle">what our clients had to say</p>

			<div id="testimonialContainer">

				<div class="slideContainer" data-slideNum="1">
					<p class="copy testimonial">“The teaching staff was exceptional Rob and Natalia were engaged in the project and directed the students very well. It was a very professional operation I felt like it was a top level advertising company.  I would really like the opportunity to work with Rob and Natalia and the students I feel it would be great learning experience to see it unfold in a professional manner.”</p>
					<p class="testimonialAuthor">Jeff Pitman, Truckladders</p>
				</div>

				<div class="slideContainer" data-slideNum="2">
					<p class="copy testimonial">“I had a great experience and hope to continue a strong relationship with everyone involved in the Reactr program!”</p>
					<p class="testimonialAuthor">Greg Arvai, IECS</p>
				</div>

				<div class="slideContainer" data-slideNum="3">
					<p class="copy testimonial">“We really enjoyed working with Reactr and watching our site come to life. Everyone involved was a pleasure to work with. Both Alicia and Amanda did an amazing job with the content we provided and capturing our overall vision for our site despite our constantly changing and evolving business. Thank you again.”</p>
					<p class="testimonialAuthor">Lisa Dinoff, Forest City Cakes</p>
				</div>

				<div class="slideContainer" data-slideNum="4">
					<p class="copy testimonial">“I am quite satisfied with the output of work and feel it is of exceptional value all things considered. I feel very fortunate to have experienced this program. Being an alumni, I am also delighted that the students that were curated to work on my project received an enriched educational experience beyond regular course curriculum and truly wish this program was around when I was enrolled.”</p>
					<p class="testimonialAuthor">Ashleigh Ross, Rove Media Inc.</p>
				</div>

			</div>

			<div class="bullets">
			</div>
		</div>
	</div>
</section>

@endsection

@section('pagescript')


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>

<script src="/js/ie.js"></script>
<script src="/js/indexAnimation.js"></script>


@endsection
