@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Edit Technology</h1>
<section id="createTech">
  <h2 class="hide">EditTechnology Form</h2>
  <p class="title">EditTechnology</p>

  <div id="techForm">
    <form action="/updateTech/{{$tech->tech_id}}" method="POST" enctype="multipart/form-data">
      @csrf

      @if ($tech->tech_src)
      <img src="../images/{{$tech->tech_src}}" alt="Tech Image" style="max-height: 200px; max-width: 200px;">
      @endif

      <div class="fileContainer" id="techImage">
          <label for="newTechImg" id="techLabel">Tech Logo... <i class="fas fa-upload"></i></label>
          <input type="file" name="newTechImg" id="newTechImg">
      </div>

      <input type="text" name="tech" title="tech name" value="{{$tech->tech_name}}" placeholder="Name of Technology">
      <button type="submit" name="submit" class="button">SUBMIT</button>
    </form>
  </div>
</section>
@endsection
