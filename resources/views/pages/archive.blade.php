@extends('layout.layout')
@section('title', 'Reactr | Project Archive')
@section('page', 'Project Archive')
@section('content')
<?php echo count($projects[0]->awards);  ?>
<h1 class="hide">Project Archive</h1>
<!-- loops through each project and displays info-->
@foreach ($projects as $project)
<section class="project">
  <h2 class="hide">{{$project->project_name}}</h2>

  <div class="content">
    <div class="projectImage">
      <img src="images/{{$project->project_thumbImg}}" alt="{{$project->project_name}} project preview">
    </div>

    <div class="projectBrief">
      <p class="title">{{$project->project_name}}</p>
      <?php
      if (count($project->awards) > 0) {
        for($i=0; $i < count($project->awards); $i++) {
          echo '<span class="awardTitle">';
          echo $project->awards[$i]->award_title.'</span> <span class="awardDesc">'.$project->awards[$i]->award_conference.'</span><br>';
        }
      }
      ?>


      <p class="copy blurb">{{$project->project_brief}}</p>
      <div class="projectInfo">
        <div class="link">
          <p class="smallTitle">Funded by</p>
          <a href="http://{{$project->project_link}}">{{$project->project_funder}}</a>
        </div>

        <div class="date">
          <p class="smallTitle">Date</p>
          <p class="copy">{{$project->project_date}} {{$project->project_year}}</p>
        </div>

      </div>
      <div class="view button hvr-grow-shadow"><a href="/details/{{$project->project_id}}">VIEW PROJECT</a></div>
    </div>

  </div>
</section>
@endforeach
@endsection
