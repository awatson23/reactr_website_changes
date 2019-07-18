@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Team Member Archive</h1>
<section class="memberArchiveContainer">
	<h2 class="hide">Team Members</h2>

			<section class="searchAdd">
				<h2 class="hide">Search Projects or Add New</h2>

				<form action="/searchMembers" method="post">
					@csrf
					<input type="text" class="searchBar" placeholder="search team members by name..." name="searchMembers">
				</form>
				<a href="/createTeam" class="button">NEW MEMBER</a>
			</section>


@foreach($teams as $team)
			<div class="memberSingle_container">
				<h3 class="hide">{{$team->st_team_fname}} {{$team->st_team_lname}}</h3>
				<div class="memberSingle">
				<div class="team_memberImage">

					<img src="images/teams/{{$team->st_team_ima}}" alt="team member image">
					<div class="m1">
						<p class="smallTitle">{{$team->st_team_bio}}</p>
						<p class="smallTitle">{{$team->st_team_program}}</p>
						<p class="smallTitle">{{$team->st_team_year}}</p>
					</div>
				</div>

				<div class="team_memberInfo">
					<p class="title">{{$team->st_team_fname}} {{$team->st_team_lname}}</p>
					<!-- check to see if they have a linkedin, if so place it, if not say no link. -->
					<p><span class="smallTitle">linkedin </span> @if ($team->st_team_linkedin){{$team->st_team_linkedin}}@else no linkedin @endif</p>
					<!-- check to see if they have an email, if so place it, if not say no email. -->
					<p><span class="smallTitle">email </span>@if ($team->st_team_email){{$team->st_team_email}}@else no email @endif</p>
				</div>

				<div class="team_memberActions projectActions">
					<ul>
						<li><a href="/editTeam/{{$team->st_team_id}}">edit</a></li>
						<li><a href="/deleteTeam/{{$team->st_team_id}}" class="delete">delete</a></li>
					</ul>
				</div>

			</div>
		</div>
@endforeach

		</section>
    @endsection
