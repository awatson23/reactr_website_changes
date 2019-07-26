@extends('layout.layout')

@section('title', 'Reactr | Job Description')

@section('page', 'Job Description')

@section('content')
<h1 class="hide">Job Details</h1>

<section id="jobDescMain">
			<h2 class="hide">{{$title}} Description</h2>

			<div class="content">
				<a href="/careers" class="smallTitle" id="backJobs">&lt; back to jobs</a>
				<p class="title">{{$title}}</p>

				<div id="mission">
					<p class="smallTitle">our mission</p>
					<p class="copy">Providing an enhanced learning experience for selected students, focusing on work in a team-based, project-driven work environment.</p>
					<p class="copy">All posted jobs are paid, part-time positions working with company partners or on internal Fanshawe digital media projects.  For Reactr positions, students are selected after an interview and a code/design test; for Work Study positions, students must also be able to demonstrate eligibility for OSAP.</p>
					<p class="smallTitle">the opportunity</p>
					<p class="copy">{{$opportunity}}</p>
				</div>

				<div id="youWill">
					<p class="smallTitle">you will</p>
					<ul>
            @foreach ($listItems as $listItem)
						<li>{{$listItem}}</li>
				    @endforeach
					</ul>
				</div>


				<div id="youAre">
					<p class="smallTitle">you are</p>

					<ul>
						<li>A strong independent learner</li>
						<li>Creative and passionate</li>
						<li>A fan of application performance</li>
						<li>A team player</li>
						<li>A problem solver</li>
					</ul>
				</div>
			</div>

		<section id="applyHere">
			<h2 class="hide">Application form</h2>

				<p class="subTitle">if this sounds like you, apply here!</p>
				<div id="jobForm">

					{{ Form::open(array('url' => '/teamSubmit', 'files' => true)) }}
						<input name="firstName" placeholder="First Name *" type="text" value="{{ old('firstName') }}" required>
						<input name="lastName" placeholder="Last Name *" type="text" value="{{ old('lastName') }}" required>
						<input name="program" placeholder="Program *" type="text" value="{{ old('program') }}" required>
						<input name="year" placeholder="Year (1st, 2nd, 3rd) *" value="{{ old('year') }}" type="text"  required>
						<input name="studentNumber" placeholder="Student Number *" value="{{ old('studentNumber') }}" type="number"  required>
						<input name="linkedin" placeholder="LinkedIn *" type="url" value="{{ old('linkedin') }}" oninvalid="this.setCustomValidity('URL requires http://')" oninput="setCustomValidity('')" required>
						<input name="folemail" placeholder="FOL Email *" type="email" value="{{ old('folemail') }}" required>
						<input name="email" placeholder="Non-FOL email *" type="email" value="{{ old('email') }}" required>
						<input name="skills" placeholder="Skills *" type="text" id="skills" value="{{ old('skills') }}" required>

						<div id="resumeRow">
								<div id="resumeContainer">
										<label for="resume" id="resumeLabel">Upload resume * <i class="fas fa-upload"></i></label>
										<input type="file" name="resume" id="resumeInput" required accept=".doc, .rtf, .docx, .txt, .odf, .pdf, .xml">
								 </div>
								 <input name="portfolio" placeholder="Portfolio Link *" type="url" value="{{ old('portfolio') }}" oninvalid="this.setCustomValidity('URL requires http://')" oninput="setCustomValidity('')" required>
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

					@if ($errors)
					<div class="errors">
						<ul>
							@foreach ($errors as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					{{ Form::close() }}


				</div>
		</section>
</section>
@endsection

@section('pagescript')
    <script src="/js/fileUpload.js"></script>
@endsection
