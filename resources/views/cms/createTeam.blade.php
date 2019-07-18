@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Add a New Team Member</h1>
<section id="createTeam">
  <h2 class="hide">Create a New Member Form</h2>
  <p class="title">Add a New Team Member</p>

<!-- displays the returned validation errors after submitting -->
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
    <form action="/saveTeam" method="POST"  enctype="multipart/form-data">
      @csrf

      <input type="text" name="first_name" required title="please enter members first name" placeholder="First Name">
      <input type="text" name="last_name" required title="please enter members last name" placeholder="Last Name">
      <input type="text" name="position" required title="please enter members position" placeholder="Position">
      <input type="text" name="program" required title="please enter members position" placeholder="Program">
      <input type="number" name="year" required title="please enter members starting year" placeholder="Year" min="2000" max="2080" maxlength="4">
      <input type="url" name="linkedIn" title="please enter members linked in url (requires http://)" placeholder="LinkedIn">
      <input type="email" name="email" title="please enter members email" placeholder="Email">

      <!--file container styled to match file input to regular inputs-->
      <div class="fileContainer" id="memberImage">
          <label for="newTeamImg" id="teamLabel">Team Member Image... <i class="fas fa-upload"></i></label>
          <!--actual input hidden with CSS, clicked with JS-->
          <input type="file" name="newTeamImg" id="newTeamImg">
      </div>

      <div id="teamSubmit">
        <button type="submit" name="submit" class="button">SUBMIT</button>
      </div>

    </form>

  </div>
</section>
@endsection
