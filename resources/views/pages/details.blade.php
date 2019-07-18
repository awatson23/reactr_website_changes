<!-- project details page -->
@extends('layout.layout')

@section('title')
Reactr | {{$project->project_name}}
@endsection

@section('page')
{{$project->project_name}}
@endsection

@section('content')

<h1 class="hide">Project Details</h1>
<section id="projectSummary">
  <h2 class="hide">Project Summary</h2>
  <div id="projContent">
    <div class="content">

      <div id="projectHero">
        <img src="../images/{{$project->project_detailImg}}" alt="project mockup">
      </div>

      <section class="projectBriefSingle">
        <h3 class="hide">A bit about the project</h3>
        <div class="singleProjCopy">
          <p class="title">{{$project->project_name}}</p>
          <p class="smallTitle">{{$project->project_type}}</p>
          <p class="copy blurb">{{$project->project_brief}}</p>
          <div class="projectInfo">

            <div class="link">
              <p class="smallTitle">funded by</p>
              <a href="#">{{$project->project_funder}}</a>
            </div>

            <div class="date">
              <p class="smallTitle">Year</p>
              <p class="copy">{{$project->project_date}}</p>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>

  <section id="client">
    <h3 class="hide">The Client</h3>

    <div class="content">
      <div id="clientInfo">
        <p class="subTitle">Client</p>
        <p class="title">{{$project->project_cName}}</p>
        <p class="copy">{{$project->project_cAbout}}</p>
      </div>

      <div id="clientLogo">
        <img src="../images/logos/{{$project->project_cLogo}}" alt="client's logo">
      </div>

    </div>
  </section>


  <section id="abstract">
    <h3 class="hide">Abstract</h3>
    <div class="content">

      <div id="abstractImage">
        <img src="../images/{{$project->project_absImg}}" alt="more project mockups">
      </div>

      <div id="abstractText">
        <p class="subTitle">abstract</p>
        <p class="copy">{{$project->project_abstract}}</p>
      </div>

    </div>
  </section>
</section>


<section id="projectGallery">
  <h2 class="hide">Project Gallery</h2>

  <div id="imageGallery" class="content">
    <p class="subTitle">Project Gallery</p>
    <div id="imageContainer">

      <div id="leftArrow"></div>
      <div id="rightArrow"></div>

      @foreach ($galleryImgs as $galleryImg)
      <div class="conclusionImage fade">
        <img src="../images/{{$galleryImg->gallery_src}}" alt="{{$project->project_name}} mockup">
      </div>
      @endforeach

    </div>
    <div id="imageBullets" class="bullets"></div>
  </div>
</section>


<section id="features">
  <h2 class="hide">Project Features</h2>
  <div class="content">

    <div id="featuresImage">
      <img src="../images/{{$project->project_featImg}}" alt="features mockup">
    </div>

    <p id="featuresTitle" class="title">Project Features</p>
    <div id="featuresText">

      <?php $i = 1;?>
      @foreach ($feats as $feat)
      <div class="feat" id="feat{{$i}}">
        <p class="smallTitle"><span> 0{{$i}} </span>{{$feat->title}}</p>
        <p>{{$feat->feature}}</p>
      </div>
      <?php $i++; ?>
      @endforeach
    </div>
  </div>
</section>

<section id="team">
  <h2 class="hide">Project Team</h2>

  <div class="content">
    <p class="title">The Team</p>

    <div id="teamLeft"></div>
    <div id="teamMembers">

      <div id="memberContainer">

        @foreach ($teams as $team)

        <div class="member">

          <div class="memberImage">
            <img src="../images/teams/{{$team->st_team_ima}}" width="200" alt="team member {{$team->st_team_fname}}">
          </div>

          <p class="smallTitle">{{$team->st_team_fname}} {{$team->st_team_lname}}</p>
          <p>{{$team->st_team_bio}}</p>

          <ul>
            @if ($team->st_team_linkedin)<li><a href="http://{{$team->st_team_linkedin}}"><img src="/images/linkedIn.png" alt="linkedin"></a></li>
            @else <li><img style="filter: grayscale(100%) !important;" src="/images/linkedIn.png" alt="linkedin"></li>
            @endif

            <!-- @if ($team->st_team_email)<li><a href="http://{{$team->st_team_email}}"><img src="/images/at.png" alt="@ something"></a></li>
            @else <li><img style="filter: grayscale(100%) !important;" src="/images/at.png" alt="@ something"></li>
            @endif -->
          </ul>

        </div>

        @endforeach

      </div>

    </div>

    <div id="teamRight"></div>

  </div>
</section>


<section id="technologies">
  <h2 class="hide">Technologies Used</h2>
  <div class="content">
    <p class="subTitle">technologies used</p>

    <div id="techLogos">
      <ul>
        @foreach ($techs as $tech)
        <li><img src="../images/{{$tech->tech_src}}" alt="{{$tech->tech_name}}" title="{{$tech->tech_name}}"></li>
        @endforeach
      </ul>
    </div>
  </div>
</section>

@if ($project->project_quote)
<section id="clientTestimonials">
  <h2 class="hide">Client Testimonials</h2>
  <div class="content">
    <p class="subTitle">project testimonial</p>

    <div id="clientContainer">
      <div class="slideContainer">
        <p class="copy testimonial">{{$project->project_quote}}</p>
        <p class="clientName">{{$project->project_quoteby}}</p>
      </div>
    </div>
  </div>
</section>
@endif
@endsection

@section('pagescript')
    <script src="/js/testimonial_slider.js"></script>
    <script src="/js/teamScroll.js"></script>
@endsection
