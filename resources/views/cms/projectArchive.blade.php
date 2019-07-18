@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">CMS Project Archive</h1>
<section id="projectArchive">

	<section class="searchAdd">
		<h2 class="hide">Search Projects or Add New</h2>
		<form action="/searchProjects" method="post">
			@csrf
			<input type="text" class="searchBar" placeholder="search by project name..." name="searchProjects">
		</form>
		<a href="/createProject" class="button">ADD NEW</a>
	</section>

	<!-- loops through all projects -->
	@foreach ($projects as $project)
	<section class="projectContainer">
		<h2 class="hide">{{$project->project_name}}</h2>
		<div class="project">

			<div class="projectImage">
				<img src="images/{{$project->project_thumbImg}}" alt="{{$project->project_name}} project preview">
			</div>

			<div class="projectInfo">
				<p class="title">{{$project->project_name}}</p>
				<p class="smallTitle">{{$project->project_type}}</p>
				<p class="smallTitle">{{$project->project_date}}</p>
				<p class="client">{{$project->project_cName}}</p>
			</div>

			<div class="projectActions">
				<ul>
					<li><a href="/viewProject/{{$project->project_id}}">view</a></li>
					<li><a href="/editProject/{{$project->project_id}}">edit</a></li>
					<li><a href="/deleteProject/{{$project->project_id}}" class="delete">delete</a></li>
				</ul>
			</div>

		</div>
	</section>
	@endforeach
</section>
@endsection
