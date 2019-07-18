@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Edit Team Member</h1>
<section id="createTeam">
  <h2 class="hide">Edit Member Form</h2>
  <p class="title">EditTeam Member</p>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <div id="teamMemberForm">
    <form action="/updateTeam/{{$team->st_team_id}}" method="POST"  enctype="multipart/form-data">
      @csrf
      @if ($team->st_team_ima)
      <img src="../images/{{$team->st_team_ima}}" alt="Member Image" style="max-height: 200px; max-width: 200px;">
      @endif

      <div class="fileContainer" id="memberImage">
          <label for="newTeamImg" id="teamLabel">Team Member Image... <i class="fas fa-upload"></i></label>
          <input type="file" name="newTeamImg" id="newTeamImg">
      </div>

      <input type="text" name="first_name" title="first name" value="{{$team->st_team_fname}}" required placeholder="First Name">
      <input type="text" name="last_name" title="last name" value="{{$team->st_team_lname}}" required placeholder="Last Name">
      <input type="text" name="position" title="position" value="{{$team->st_team_bio}}" required placeholder="Position">
      <input type="text" name="program" title="program" value="{{$team->st_team_program}}" required placeholder="Program">
      <input type="number" name="year" title="year started" value="{{$team->st_team_year}}" required placeholder="Year">
      <input type="url" name="linkedIn" title="linkedin url" value="{{$team->st_team_linkedin}}" required placeholder="LinkedIn">
      <input type="email" name="email" title="email" value="{{$team->st_team_email}}" required placeholder="Email">

      <div id="teamSubmit">
        <button type="submit" name="submit" class="button">SUBMIT</button>
      </div>
    </form>

  </div>
</section>
@endsection
