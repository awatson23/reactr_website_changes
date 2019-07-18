@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Create New Project</h1>
<section id="newProject">
  <h2 class="hide">New Project Form</h2>
  <p class="title">Add New Project</p>

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

  <form action="/saveProject" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="newProjGeneral formSection">
      <p class="subTitle">Project info</p>

      <!--beginning section split into two groups for positioning-->
      <div class="generalMain formHalf">

        <p class="smallTitle">general</p>

        <div class="featuredCheck">
          <input type="checkbox" name="homeFeature" value="1" id="heroCheck"><span class="check" id="feat">Feature on home page</span>
        </div>

        <!--invisible unless above checkbox is clicked-->
        <div class="fileContainer" id="homeImage">
          <label for="projHomeImg" id="briefLabel" class="fileLabel">Image for Project Gallery... <i class="fas fa-upload"></i></label>
          <input type="file" name="projHomeImg" id="projHomeImg" class="fileInpt" type="url" value="{{ old('projHomeImg') }}">
        </div>

        <!--general project info-->
        <input type="text" name="projTitle" placeholder = "Project Title" value="{{ old('projTitle') }}" title="Please enter the project name" required>
        <input type="text" name="projType" placeholder="Project Type" value="{{ old('projType') }}" title="Please enter the project type" required>
        <input type="text" name="projFund" placeholder="Project Funded By" value="{{ old('projFund') }}" title="Please enter the funder of the project" required>
        <input type="number" name="projYear" placeholder="Project Year" value="{{ old('projYear') }}" title="Please enter a vaild year" required min="2000" max="2080" maxlength="4">
        <textarea name="projBrief" id="projBrief" placeholder="Project Brief..." value="{{ old('projBrief') }}" title="Please enter a brief about the project" required></textarea>
        <textarea name="projAbstract" id="projAbstract" placeholder="Project Abstract..." value="{{ old('projAbstract') }}" title="please enter the abstract of the project" required></textarea>

      </div>



      <!--begin second half of main section-->
      <div class="generalSub formHalf">

        <p class="smallTitle">technology</p>

        <div class="technologies">
          <!-- loops through every technology -->
          @foreach ($techs as $tech)
          <input type="checkbox" name="tech[]" value="{{$tech->tech_id}}"> <span class="check">{{$tech->tech_name}}</span>
          @endforeach
        </div>


        <div class="divider"></div>


        <p class="smallTitle">project quote</p>

        <input type="text" name="projQuoteName" placeholder="Author of Quote" value="{{ old('projQuoteName') }}" title="please enter the author of this quote" required>
        <textarea name="projQuote" id="projQuote" placeholder="Project Quote..." title="please enter a quote about this project" required>{{ old('projQuote') }}</textarea>


        <div class="divider"></div>


        <p class="smallTitle imagesTitle">images</p>

        <div class="fileContainer">
          <label for="projThumbnail" id="thumbnailLabel">Project Thumbnail... <i class="fas fa-upload"></i></label>
          <input type="file" name="projThumbnail" id="projThumbnail" value="{{ old('projThumbnail') }}" required>
        </div>

        <div class="fileContainer">
          <label for="projHeroImg" id="HeroLabel">Hero Detail Image... <i class="fas fa-upload"></i></label>
          <input type="file" name="projHeroImg" id="projHeroImg" value="{{ old('projHeroImg') }}" required>
        </div>

        <div class="fileContainer">
          <label for="projAbstractImg" id="abstractLabel">Abstract Image... <i class="fas fa-upload"></i></label>
          <input type="file" name="projAbstractImg" id="projAbstractImg" value="{{ old('projAbstractImg') }}" required>
        </div>

        <div class="fileContainer">
          <label for="projFeatImg" id="featLabel">Feature Image... <i class="fas fa-upload"></i></label>
          <input type="file" name="projFeatImg" id="projFeatImg" value="{{ old('projFeatImg') }}" required>
        </div>

      </div>
    </div>







    <!--dynamicSection class used in JS to find clicked items for adding inputs-->
    <div id="featSection" class="formSection dynamicSection">
      <div class="divider"></div>

      <p class="smallTitle featuresTitle">features</p>

      <div id="addFeat">
        <a href="#" class="addInput" id="addFeat">+add feature</a>
      </div>

      <div class="newProjFeatures formSection">

        <div class="featureInfo">
          <input type="text" name="projFeature[]" placeholder="Name of Feature" class="featClone" value="{{ old('projFeature[]') }}" title="please enter the title of this feature" required>
          <textarea name="projFeatureDesc[]" id="featureDesc" placeholder="Feature Description..." value="{{ old('projFeatureDesc[]') }}" class="featClone" title="please enter a description about this feature" required></textarea>
        </div>

      </div>
    </div>






    <!--Team members section-->
    <div id="team" class="newProjTeam formSection dynamicSection">

      <div class="divider"></div>
      <p class="subTitle">team members</p>


      <div class="addMembers">
        <div class="selectContainer">

          <!--custom div to match regular inputs, same as file upload-->
          <div class="styledSelect">
            <!-- select is collected as an array -->
            <select name="newMember[]" class="teamInput" required>
              <!-- loops through every team member -->
              @foreach ($teams as $team)
              <option value="{{$team->st_team_id}}">{{$team->st_team_fname}} {{$team->st_team_lname}}</option>
              @endforeach
            </select>
          </div>

        </div>
      </div>

      <a href="#" class="addInput" id="addTeam">+add member</a>

    </div>







    <!--Client section-->
    <div class="newProjClient formSection">
      <div class="divider"></div>

      <p class="subTitle">client info</p>

      <input type="text" name="projClientName" placeholder="Client Name" required title="please enter project client name" value="{{ old('projClientName') }}">

      <div class="fileContainer">
        <label for="projClientImg" id="clientLabel">Client Logo... <i class="fas fa-upload"></i></label>
        <input type="file" name="projClientImg" id="projClientImg" value="{{ old('projClientImg') }}">
      </div>

      <textarea name="projClientInfo" id="clientInfo" placeholder="About Client..." required title="please enter client a description" value="{{ old('projClientInfo') }}"></textarea>
    </div>






    <!--gallery section-->
    <div class="newProjGallery formSection dynamicSection">
      <div class="divider"></div>

      <p class="subTitle">gallery</p>

      <div class="galleryFile">

        <!--styled button for uploading multiple files-->
        <div class="multiUpload"><i class="fas fa-upload"></i></div>
        <p class="smallTitle multi">upload multiple... </p>

          <input type="file" name="projGalleryImg[]" id="projGalleryImg" multiple>

          <!--this list will populate with JS once user has added files-->
          <div id="fileNames">
            <ul></ul>
          </div>

       </div>
    </div>

    <button type="submit" name="submit" class="button" id="submit">SUBMIT</button>

  </form>
</section>
@endsection

<!-- dedicated javascript files for specific view -->
@section('cmsScript')
<script src="/js/add_input.js"></script>
@endsection
