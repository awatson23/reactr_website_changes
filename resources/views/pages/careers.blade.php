@extends('layout.layout')

@section('title', 'Careers')

@section('page', 'Careers')

@section('content')

	<section id="people">
			<h2 class="hide">People We Are Looking For</h2>
			<div class="content">

				<div id="peopleMain">
					<p class="title">Start your career path while you're still in school and get ahead.</p>
				</div>

				<div id="peopleList">
					<p class="subTitle">we are looking for people who are:</p>

					<ul>
						<li>Experienced in HTML / CSS / Javascript</li>
						<li>Bothered by bugs (the coding kind)</li>
						<li>Experienced in design software &amp; tools</li>
						<li>Creative and passionate</li>
						<li>A fan of application performance</li>
						<li>Organized and detail oriented</li>
						<li>Team players</li>
						<li>Problem solvers</li>
					</ul>

				</div>
            </div>
				

		</section>
			  
		<section id="jobs">
			<h2 class="hide">Available Jobs at Reactr</h2>
			<div id="jobContainer" class="content">

				<div id="jobsImage">
					<img src="/images/multi_phone.png" alt="mobile mockups">
				</div>

				<div id="jobsImageLG">
					<img src="/images/multi_phoneLG.png" alt="desktop mockups">
				</div>

				<p class="subTitle">available jobs at reactr</p>
				<p class="copy jobCopy">Lorem ipsum dolor sit amet, consecteur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

				<div id="availableJobs">
					<div class="job">
						<p class="smallTitle"><span>01</span>WORK STUDY (DOMESTIC &amp; INTERNATIONAL)</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/workstudy" class="smallTitle moreAbtJob"><span>Apply</span></a>
					</div>

					<div class="job">
						<p class="smallTitle"><span>02</span>front-end web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/frontend" class="smallTitle moreAbtJob"><span>Apply</span></a>
					</div>


					<div class="job">
						<p class="smallTitle"><span>03</span>full stack web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/fullstack" class="smallTitle moreAbtJob"><span>Apply</span></a>
					</div>


					<div class="job">
						<p class="smallTitle"><span>04</span>back-end web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/backend" class="smallTitle moreAbtJob"><span>Apply</span></a>
					</div>

				</div>
			</div>
		</section>

		
	
	<section id="aliminiWords">
		<h3 class="hide">Words from our alumini</h3>
		<p class="subTitle">words from our alumini</p>

		<div id="wordsFromAlumini">
			@foreach ($testimonials as $testimonial)
			<div class="wordsContainer">
				<p class="copy">{{$testimonial->testimony}}</p>
				<p class="teamName">{{$testimonial->teams->st_team_fname}} {{$testimonial->teams->st_team_lname}} -{{$testimonial->teams->st_team_bio}}</p>
			</div>
			@endforeach
		</div>

		<div id="teamBullets"></div>
	</section>


@endsection

@section('pagescript')
<script src="/js/aluminiWords.js"></script>
<script src="/js/ie.js"></script>
<script src="/js/indexAnimation.js"></script>

@endsection