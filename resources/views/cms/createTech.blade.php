@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Add a New Technology</h1>
<section id="createTech">
  <h2 class="hide">New Technology Form</h2>
  <p class="title">Add New Technology</p>

  <div id="techForm">
    <form action="/saveTech" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="fileContainer" id="techImage">
          <label for="newTechImg" id="techLabel">Tech Logo... <i class="fas fa-upload"></i></label>
          <input type="file" name="newTechImg" id="newTechImg">
      </div>
      <input type="text" name="tech" placeholder="Name of Technology">
      <button type="submit" name="submit" class="button">SUBMIT</button>
    </form>
  </div>
</section>
@endsection
