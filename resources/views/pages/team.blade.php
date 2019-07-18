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
				<a href="#jobContainer" class="smallTitle">view positions</a>
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

					<div class="member" id="member5">
						<img src="/images/natalia.png" alt="Tina VanderVecht" class="memberPhoto">
						<p class="smallTitle">Tina VanderVecht</p>
						<p>Assistant Level 3</p>
						<ul>
							<li><a href="https://www.linkedin.com/in/tinavv/"><img src="/images/linkedIn.svg" alt="linkedin" class="teamIcon" width="21"></a></li>
							<li><a href="mailto:tvandervecht@gmail.com"><img src="/images/at.svg" alt="@ something" class="teamIcon" width="21"></a></li>
						</ul>

					</div>
				</div>


				<section id="teamWords">
					<h3 class="hide">Words from our Team</h3>
					<p class="subTitle">words from our team</p>

					<div id="wordsFromTeam">
						@foreach ($testimonials as $testimonial)
						<div class="wordsContainer">
							<p class="copy">{{$testimonial->testimony}}</p>
							<p class="teamName">{{$testimonial->teams->st_team_fname}} {{$testimonial->teams->st_team_lname}} -{{$testimonial->teams->st_team_bio}}</p>
						</div>
						@endforeach
					</div>

					<div id="teamBullets"></div>
				</section>

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
						<a href="/opportunities/workstudy" class="smallTitle moreAbtJob"><span>more about this job</span></a>
					</div>

					<div class="job">
						<p class="smallTitle"><span>02</span>front-end web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/frontend" class="smallTitle moreAbtJob"><span>more about this job</span></a>
					</div>


					<div class="job">
						<p class="smallTitle"><span>03</span>full stack web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/fullstack" class="smallTitle moreAbtJob"><span>more about this job</span></a>
					</div>


					<div class="job">
						<p class="smallTitle"><span>04</span>back-end web developer</p>
						<p class="copy">June 2018</p>
						<a href="/opportunities/backend" class="smallTitle moreAbtJob"><span>more about this job</span></a>
					</div>

				</div>
			</div>
		</section>







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


				<div id="applyContainer">
					<section id="applyHere">

						<h3 class="hide">Application Form</h3>
						<p class="subTitle">if this sounds like you, apply here!</p>

						{{ Form::open(array('url' => '/teamSubmit', 'files' => true)) }}
							<input name="firstName" placeholder="First Name *" type="text" value="{{ old('firstName') }}" title="please enter your first name." required>
							<input name="lastName" placeholder="Last Name *" type="text" value="{{ old('lastName') }}" title="please enter your last name." required>
							<input name="program" placeholder="Program *" type="text" value="{{ old('program') }}" title="please enter your program." required>
							<input name="year" placeholder="Year (1st, 2nd, 3rd) *" type="text" value="{{ old('year') }}" title="please enter your program year." required>
							<input name="studentNumber" placeholder="Student Number *" value="{{ old('studentNumber') }}"title="please enter your student number." type="number"  required>
							<input name="linkedin" placeholder="LinkedIn *" type="url" value="{{ old('linkedin') }}" title="please enter your linked in link." oninvalid="this.setCustomValidity('URL requires http://')" oninput="setCustomValidity('')" required>
							<input name="folemail" placeholder="FOL Email *" type="email" value="{{ old('folemail') }}" title="please enter your fanshawe online email (ending in @fanshaweonline.ca)." required>
							<input name="email" placeholder="Non-FOL email *" type="email" value="{{ old('email') }}" title="please enter your non fanshawe online email." required>
							<input name="skills" placeholder="Skills *" type="text" id="skills" value="{{ old('skills') }}" title="please enter your skills." required>

              <div id="resumeRow">
	             		<div id="resumeContainer">
	                		<label for="resume" id="resumeLabel">Upload resume * <i class="fas fa-upload"></i></label>
	                    <input type="file" name="resume" id="resumeInput" accept=".doc, .rtf, .docx, .txt, .odf, .pdf, .xml" title="make sure the file ends in .doc, .rtf, .docx, .txt, .odf, .pdf or .xml" required>
	                 </div>
							     <input name="portfolio" placeholder="Portfolio Link *" type="url" value="{{ old('portfolio') }}" title="please enter your portfolio link" oninvalid="this.setCustomValidity('URL requires http://')" oninput="setCustomValidity('')" required>
	            </div>
              <div class="formBottom">
							<p id="formText">Mandatory fields *</p>
							<input type="submit" name="submit" class="button hvr-grow-shadow" id="submit" value="submit">
            </div>

            @if (session('status'))
            <div class="status-success">
              {{ session('status') }}
            </div>
            @endif

            @if (session('errors'))
            <div class="errors">
              {{$errors}}
            </div>
            @endif

						{{ Form::close() }}

					</section>
				</div>

		</section>
@endsection

@section('pagescript')
    <script src="/js/teamWords.js"></script>
    <script src="/js/fileUpload.js"></script>
@endsection
