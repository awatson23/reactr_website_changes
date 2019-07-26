@extends('layout.layout')

@section('title', 'Reactr | Team')

@section('page', 'Team')

@section('content')
  <h1 class="hide">Reactr Team</h1>
  		<section id="teamHero">
			<h2 class="hide">The Student Learning Experience</h2>
			<div class="content">

				<div id="teamHeroImage">
					<img id="teamIMG1" src="/images/team_hero1.png" alt="team mockups 1">
					<img id="teamIMG2" src="/images/team_hero2.png" alt="team mockups 2">
				</div>

				<div id="teamHeroText">
					<p class="title">Enhancing the student learning experience.</p>
					<p class="copy">We are a team of dedicated educators who have years of working and teaching experience, and top students who are dedicated to taking their education to the next level. </p>
					<div class="button team hvr-grow-shadow">
						<a href="#ourTeam">MEET THE TEAM</a>
					</div>
				</div>

			</div>
		</section>



		<section id="workingAtReactr">
			<h2 class="hide">Working At Reactr</h2>
				<div class="content">
					<p class="subTitle">working at reactr</p>
					<p class="copy">We collaborate with companies in London and Southern Ontario to bring <span>real, technology-based projects and team experiences</span> to students in our programs. Reactr alumni have identified these projects as being one of, if not the most significant learning experiences in their time at college.</p>
					<a href="#jobContainer" class="smallTitle">view careers</a>
				</div>

			<div id="reactrVideo">		
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/vc2KrWLOX5M?rel=0&amp;showinfo=0&modestbranding=0&rel=0&color=white" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</section>



		<section id="ourTeam">
			<h2 class="hide">Our Team: Academic Leaders</h2>

				<div class="teamTitle">
					<p class="subTitle">our team</p>
					<p class="title">Academic Leaders</p>
				</div>

        	<div class="content">

				<div id="teamPhotos">

					<div class="member" id="member1">
						<img src="images/rob.png" alt="Robert Haaf" class="memberPhoto">
						<p class="smallTitle">robert haaf</p>
						<p>Back-end Lead</p>
						<ul>
							<li><a href="http://www.linkedin.com/pub/robert-haaf/8/4b2/1bb"><img src="/images/linkedIn.svg" alt="linkedin" class="teamIcon" width="21"></a></li>
							<li><a href="RHaaf@fanshawec.ca"><img src="/images/at.svg" alt="@ something" class="teamIcon" width="21"></a></li>
						</ul>
					</div>


					<div class="member" id="member2">
						<img src="/images/john.png" alt="John Bennet" class="memberPhoto">
						<p class="smallTitle">John bennett</p>
						<p>Design Lead</p>
						<ul>
							<li><a href="https://www.linkedin.com/in/john-bennett-9aa1a760/"><img src="/images/linkedIn.svg" alt="linkedin" class="teamIcon" width="21"></a></li>
							<li><a href="mailto:jbennett@fanshawec.ca"><img src="/images/at.svg" alt="@ something" class="teamIcon" width="21"></a></li>
						</ul>
					</div>


					<div class="member" id="member3">
						<img src="/images/marco.png" alt="Marco Deluca" class="memberPhoto">
						<p class="smallTitle">Marco Deluca</p>
						<p>Front-end Lead</p>

						<ul>
							<li><a href="https://www.linkedin.com/in/marco-de-luca-71917498/"><img src="/images/linkedIn.svg" alt="linkedin" class="teamIcon" width="21"></a></li>
							<li><a href="mailto:m_deluca3@fanshawec.ca"><img src="/images/at.svg" alt="@ something" class="teamIcon" width="21"></a></li>
						</ul>

					</div>


					<div class="member" id="member4">
						<img src="/images/natalia.png" alt="Natalia Aguillon" class="memberPhoto">
						<p class="smallTitle">Natalia Aguillon</p>
						<p>Project Manager</p>
						<ul>
							<li><a href="http://ca.linkedin.com/in/nataliaaguillon"><img src="/images/linkedIn.svg" alt="linkedin" class="teamIcon" width="21"></a></li>
							<li><a href="mailto:n_aguillon@fanshawec.ca"><img src="/images/at.svg" alt="@ something" class="teamIcon" width="21"></a></li>
						</ul>

					</div>

				
				</div>

			</div>
		</section>

		
@endsection

@section('pagescript')
    <!-- <script src="/js/teamWords.js"></script> -->
    <script src="/js/fileUpload.js"></script>
@endsection
