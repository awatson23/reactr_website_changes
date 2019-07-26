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

			<h2 class="hide">Available Jobs at Reactr</h2>
			<div id="jobContainer" class="content">

				<!--<div id="jobsImage">
					<img src="/images/multi_phone.png" alt="mobile mockups">
				</div>

				<div id="jobsImageLG">
					<img src="/images/multi_phoneLG.png" alt="desktop mockups">
				</div>-->

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

		<!-- <div id="applyContainer">
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
	</div> -->
	
	<section id="teamWords">
		<h3 class="hide">Words from our students</h3>
		<p class="subTitle">words from our students</p>

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



@endsection


@section('pagescript')
<script src="/js/teamWords.js"></script>
<script src="/js/ie.js"></script>
<script src="/js/indexAnimation.js"></script>

@endsection