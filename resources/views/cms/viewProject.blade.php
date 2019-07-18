@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Project View</h1>
		<section class="projectView">
			<h2 class="hide">Project Info for {{$project->project_name}}</h2>

			<section class="projectMain">
				<h3 class="hide">Project date, type</h3>

				<div class="projectHero">
					<img src="../images/{{$project->project_detailImg}}" alt="{{$project->project_name}} hero image">
				</div>

				<div class="mainInfo">
					<p class="title">{{$project->project_name}}</p>
					<p class="smallTitle">{{$project->project_type}}</p>
					<p class="smallTitle">{{$project->project_date}}</p>
					<p class="smallTitle">{{$project->project_funder}}</p>
				</div>
			</section>

			<section class="projectBrief">
				<h3 class="hide">Project Brief</h3>

				<p class="subTitle">project brief</p>
				<p class="copy">{{$project->project_brief}}</p>
			</section>

			<section class="projectAbstract">
				<h3 class="hide">Project Abstract</h3>

				<div class="abstractInfo">
					<p class="subTitle">project abstract</p>
					<p class="copy">{{$project->project_abstract}}</p>
				</div>

				<div class="abstractImage">
					<img src="../images/{{$project->project_absImg}}" alt="{{$project->project_name}} abstract image">
				</div>
			</section>

			<section class="tech">
				<h3 class="hide">Technology Used</h3>

				<p class="subTitle">technology used</p>
        @foreach ($techs as $tech)
				<div class="techImage">
					<img src="../images/{{$tech->tech_src}}" alt="{{$tech->tech_name}}" title="{{$tech->tech_name}}">
				</div>
        @endforeach
			</section>

			<section class="projectFeatures">
				<h3 class="hide">Project Features</h3>
				<p class="subTitle">project features</p>

				<div class="featuresContent">
					<ul>
            @foreach ($feats as $feat)
						<li><p class="smallTitle">{{$feat->title}}</p>
							<p class="copy"><p>{{$feat->feature}}</p></p>
						</li>
            @endforeach
					</ul>

					<div class="featuresImage">
						<img src="../images/{{$project->project_featImg}}" alt="{{$project->project_name}} features image">
					</div>

				</div>
			</section>

			<section class="teamMembers">
				<h3 class="hide">Team Members</h3>
				<p class="subTitle">team members</p>
        @foreach ($teams as $team)
				<div class="member">
					<div class="memberImage">
						<img src="../images/teams/{{$team->st_team_ima}}" alt="{{$team->st_team_fname}} {{$team->st_team_lname}}">
					</div>

					<p class="smallTitle">{{$team->st_team_fname}} {{$team->st_team_lname}}</p>
					<p class="copy">{{$team->st_team_bio}}</p>
          @if ($team->st_team_linkedin)
					<p class="copy"><a href="{{$team->st_team_linkedin}}">{{$team->st_team_linkedin}}</a></p>
          @else <p class="copy">No Linkedin Set</p>
          @endif

          @if ($team->st_team_email)
					<p class="copy"><a href="{{$team->st_team_email}}">{{$team->st_team_email}}</a></p>
          @else <p class="copy">No Email Set</p>
          @endif

				</div>
        @endforeach
			</section>

			<section class="clientInfo">
				<h3 class="hide">Client Information</h3>
				<p class="title">CLIENT INFO</p>

				<section class="clientName">
					<h4 class="hide">Client Name</h4>
					<p class="subTitle">client name</p>
					<p class="copy">{{$project->project_cName}}</p>
				</section>

				<section class="aboutClient">
					<h4 class="hide">About the Client</h4>

					<p class="subTitle">about client</p>
					<p class="copy">{{$project->project_cAbout}}</p>

          <div class="clientLogo">
						<img src="../images/logos/{{$project->project_cLogo}}" alt="client's logo">
					</div>
				</section>
			</section>

			<section class="gallery">
				<h3 class="hide">Project Gallery</h3>
				<div class="imagePop">
					<p class="closeImage"> x </p>
					<img src="" alt="large image" class="largeImage">

					<div class="controls">
						<div class="prev"></div>
						<div class="next"></div>
					</div>
				</div>

				<p class="title">GALLERY</p>
        @foreach ($galleryImgs as $galleryImg)
				<div class="galleryImage">
					<img src="/images/{{$galleryImg->gallery_src}}" alt="{{$project->project_name}} mockup">
				</div>
        @endforeach
			</section>


		</section>
@endsection

@section('cmsScript')
  <script src="../js/cms.js"></script>
@endsection
