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

		<div id="heroText">
			<div id="heroBlurb">
				<p class="title">We Are Reactr.</p>
				<p>An experiential program at Fanshawe that links student teams with companies to develop Web and digital media solutions.</p>
			</div>

			<div id="heroLinks">
				<div class="hireUs button hvr-grow-shadow"><a href="#contactUs">WORK WITH US</a></div>
				<div id="join" class="button hvr-radial-out"><a href="{{ action("TestimonialController@getAllTestimonials") }}#jobContainer">JOIN OUR TEAM</a></div>
			</div>
		</div>

		<div id="heroImage">
			<img src="images/hero.png" alt="hero image">
		</div>

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
					<p class="subTitle">{{$project->project_type}}</p>
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

	<div class="content">
		<div class="mainOffer">
			<p class="subTitle">WHAT WE OFFER</p>
			<p class="copy">Each Reactr project is developed by a team of students dedicated to that project, supervised and supported by Fanshawe faculty and staff.</p>
			<p class="copy">The work that we undertake falls into these main categories:</p>
			<div id="offerButton" class="hireUs button hvr-grow-shadow"><a href="#contactUs">WORK WITH US</a></div>
		</div>

		<div id="design" class="offer">
			<img src="images/icon_design.svg" alt="web design icon" width="60">
			<p class="smallTitle">WEB DESIGN and development</p>
			<p class="copy">Creation of a customized informational Web site for a company, with content management features.</p>
		</div>

		<div id="development" class="offer">
			<img src="images/icon_development.svg" alt="web development icon" width="60">
			<p class="smallTitle">large scale web application development</p>
			<p class="copy">Planning and building of a complex, Web-based application to address more specific company needs.</p>
		</div>

		<div id="branding" class="offer">
			<img src="images/icon_branding.svg" alt="branding icon" width="73">
			<p class="smallTitle">Graphic design and BRANDING</p>
			<p class="copy">The Reactr team works with a company to create a design and branding document for Web and print use.</p>
		</div>

		<div id="software" class="offer">
			<img src="images/icon_software.svg" alt="software icon" width="60">
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

						<div class="hireUs button hvr-grow-shadow"><a href="#contactUs">WORK WITH US</a></div>
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


<section id="ourSponsors">
	<h2 class="hide">Thank You to Our Sponsors</h2>

	<div id="thankYou">
		<p class="title">Thank you to our sponsors.</p>
	</div>

	<div id="sponsorArea">
		<div class="sponsorLogo">
			<img src="images/logo_nserc.svg" alt="nserc logo" width="157">
		</div>

		<div class="sponsorLogo">
			<img src="images/logo_fanshawe.svg" alt="fanshawe logo" width="183">
		</div>

		<div class="sponsorLogo">
			<img src="images/logo_oce.svg" alt="oce logo" width="131">
		</div>

	</div>
</section>


<section id="contactUs">
	<h2 class="hide">Contact Us</h2>

	<div class="content">
		<div id="contactInfo">
			<p class="subTitle">Contact Us</p>

			<div class="infoBlock">
				<p class="smallTitle">PHONE</p>
				<p class="copy"><span>+1 (519) 452 4430</span> Ext 6409</p>
			</div>

			<div class="infoBlock">
				<p class="smallTitle">ADDRESS</p>
				<p class="copy">Fanshawe College London Downtown Campus</p>
				<p>Howard W. Rundle Building,</p>
				<p>137 Dundas Street</p>
				<p>London, ON N6A 1E9</p>
				<p>CANADA</p>
			</div>

			<div class="infoBlock">
				<p class="smallTitle">EMAIL</p>
				<p class="copy">jobs@reactr.ca</p>
				<p class="copy">hire@reactr.ca</p>
				<p class="copy"><span>info@reactr.ca</span></p>
			</div>
		</div>

		<div id="contactForm">

			@if (session('status'))
			<div class="status-success">
				{{ session('status') }}
			</div>
			@endif

      @if ($errors->any())
			<div class="errors">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div id="formBlurb">
				<p class="subTitle">get in touch</p>
				<p class="copy">Fill out this form to get more information about working with Reactr.</p>
			</div>

			{{Form::open(['url'=>'/homeSubmit'])}}
				{{ csrf_field() }}
				<input name="name" id="name" type="text" placeholder="Full Name" required>
				<input name="email" id="email" type="email" placeholder="Email" required>

				<select name="interest" id="interest">
					<option value="contact us">Contact Reactr</option>
					<option value="hire us">Work with Us</option>
					<option value="other">Other</option>
				</select>

				<textarea name="body" id="message" placeholder="Message..." required></textarea>
				<input type="submit" id="submit" class="button">
				<!-- <button id="submit" class="button">submit</button> -->

			{{Form::close()}}

		</div>
	</div>
</section>

@endsection

@section('pagescript')
<script src="/js/ie.js"></script>
<script src="/js/indexAnimation.js"></script>

@endsection
