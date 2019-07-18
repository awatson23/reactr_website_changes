@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Edit Project</h1>
<section id="newProject">
  <h2 class="hide">Edit Project Form</h2>
  <p class="title">{{$project->project_name}}</p>

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

  <form action="/updateProject/{{$project->project_id}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="newProjGeneral formSection">
      <p class="subTitle">Edit Project info</p>

      <div class="generalMain formHalf">
        <p class="smallTitle">general</p>

        <div class="featuredCheck">
          <!-- displays photo if project is featured on home page -->
          @if ($project->homeFeature == 1)
          <img src="../images/{{$project->project_homeImg}}" alt="home Image" style="max-height: 200px; max-width: 200px;">
          @endif
          <div class="featuredCheckHolder">
            <input type="checkbox" name="homeFeature" value="1" @if ($project->homeFeature == 1) checked @endif id="heroCheck"><span class="check" id="feat">Feature on home page</span>
          </div>

        </div>

        <div class="fileContainer" id="homeImage">
          <label for="projHomeImg" id="briefLabel" class="fileLabel">Image for Project Gallery... <i class="fas fa-upload"></i></label>
          <!-- controller checks to see if filled out before saving and storing -->
          <input type="file" name="projHomeImg" id="projHomeImg" class="fileInpt" type="url" value="{{ old('projHomeImg') }}">
        </div>

        <input type="text" name="projTitle" placeholder = "Project Title" value="{{$project->project_name}}" title="project title" required>
        <input type="text" name="projType" placeholder="Project Type" value="{{$project->project_type}}" title="project type" required>
        <input type="text" name="projFund" placeholder="Project Funded By" value="{{$project->project_funder}}" title="project funder" required>
        <input type="number" name="projYear" placeholder="Project Year" value="{{$project->project_date}}" title="year project was started" required min="2000" max="2080" maxlength="4">
        <textarea name="projBrief" id="projBrief" placeholder="Project Brief..." title="project brief" required>{{$project->project_brief}}</textarea>
        <textarea name="projAbstract" id="projAbstract" placeholder="Project Abstract..." title="project abstract" required>{{$project->project_abstract}}</textarea>
      </div>


      <div class="generalSub formHalf">
        <p class="smallTitle">technology</p>

        <div class="technologies">
          @for ($i=0; $i < count($allTechs) ; $i++)
          <!-- loop the option tags for each tech and check to see if looped tech is found in the array of tech used for this project, if it is shoe that it is checked already -->
          <input type="checkbox" name="tech[]" value="{{$allTechs[$i]->tech_id}}" @if ($techs->contains($allTechs[$i])) checked @endif> <span class="check">{{$allTechs[$i]->tech_name}}</span>
          @endfor
        </div>

        <div class="divider"></div>

        <p class="smallTitle">project quote</p>
        <input type="text" name="projQuoteName" placeholder="Author of Quote" value="{{$project->project_quoteby}}" title="quote author" required>
        <textarea name="projQuote" id="projQuote" placeholder="Project Quote..." value="{{ old('projQuote') }}" title="project quote" required>{{$project->project_quote}}</textarea>

        <div class="divider"></div>

        <p class="smallTitle imagesTitle">images</p>



        <!--imgEdit div added for styling/positioning inputs with thumbnails-->
        <div class="imgEdit">

          <p class="copy">Project Thumbnail:</p>
          <img src="../images/{{$project->project_thumbImg}}" alt="home Image" style="max-height: 200px; max-width: 200px;">

          <div class="fileContainer">
            <label for="projThumbnail" id="thumbnailLabel">Click to change... <i class="fas fa-upload"></i></label>
            <input type="file" name="projThumbnail" id="projThumbnail" value="{{ old('projThumbnail') }}" >
          </div>

        </div>



        <div class="imgEdit">

          <p class="copy">Hero Image:</p>
          <img src="../images/{{$project->project_detailImg}}" alt="home Image" style="max-height: 200px; max-width: 200px;">

          <div class="fileContainer">
            <label for="projHeroImg" id="HeroLabel">Click to change... <i class="fas fa-upload"></i></label>
            <input type="file" name="projHeroImg" id="projHeroImg" value="{{ old('projThumbnail') }}" >
          </div>

        </div>



        <div class="imgEdit">

          <p class="copy">Abstract Image:</p>
          <img src="../images/{{$project->project_absImg}}" alt="home Image" style="max-height: 200px; max-width: 200px;">

          <div class="fileContainer">
            <label for="projAbstractImg" id="abstractLabel">Click to change... <i class="fas fa-upload"></i></label>
            <input type="file" name="projAbstractImg" id="projAbstractImg" value="{{ old('projThumbnail') }}" >
          </div>

        </div>



        <div class="imgEdit">

          <p class="copy">Features Image:</p>
          <img src="../images/{{$project->project_featImg}}" alt="home Image" style="max-height: 200px; max-width: 200px;">

          <div class="fileContainer">
            <label for="projFeatImg" id="featLabel">Click to change... <i class="fas fa-upload"></i></label>
            <input type="file" name="projFeatImg" id="projFeatImg" value="{{ old('projThumbnail') }}" >
          </div>

        </div>

      </div>
    </div>









    <div id="featSection" class="formSection dynamicSection">
      <div class="divider"></div>

      <p class="smallTitle featuresTitle">features</p>

      <div id="addFeat">
        <a href="#" class="addInput" id="addFeat">+add feature</a>
      </div>


      <div class="newProjFeatures formSection">
        @for ($i=0; $i < count($feats) ; $i++)
          <div class="featureInfo">
            <input type="text" name="projFeature[]" placeholder="Name of Feature" class="featClone" value="{{$feats[$i]->title}}" title="feature{{$i}} title" required>
            <textarea name="projFeatureDesc[]" id="featureDesc" placeholder="Feature Description..." value="{{ old('projFeatureDesc[]') }}" class="featClone" title="feature{{$i}} description" required>{{$feats[$i]->feature}}</textarea>
            <a href="#" class="remove">-remove</a>
          </div>
        @endfor
      </div>


    </div>







    <div id="team" class="newProjTeam formSection dynamicSection">
      <div class="divider"></div>
      <p class="subTitle">team members</p>

      <div class="addMembers">
        <!-- creates the number of input fields as there were members on this proejct -->
        @for ($i=0; $i < count($teams) ; $i++)
        <div class="selectContainer">
          <div class="styledSelect">
            <select name="newMember[]" class="teamInput" required>
              <!-- loops through ALL members (incase they want to change the member) -->
              @for ($j=0; $j < count($allTeams) ; $j++)
              <!-- check to see if that id exists before trying to use it -->
                @if ($allTeams[$j])
                  <option value="{{$allTeams[$j]->st_team_id}}" @if ($allTeams[$j]->st_team_id == $teams[$i]->st_team_id) selected @endif>{{$allTeams[$j]->st_team_fname}} {{$allTeams[$j]->st_team_lname}}</option>
                @endif
              @endfor
            </select>
          </div>
          <a href="#" class="remove">-remove</a>
        </div>
        @endfor
      </div>

      <a href="#" class="addInput" id="addTeam">+add member</a>
    </div>

    <div class="newProjClient formSection">
      <div class="divider"></div>
      <p class="subTitle">client info</p>
      <input type="text" name="projClientName" placeholder="Client Name" required title="client name" value="{{$project->project_cName}}">
      <div class="fileContainer">
        <label for="projClientImg" id="clientLabel">Client Logo... <i class="fas fa-upload"></i></label>
        <input type="file" name="projClientImg" id="projClientImg" value="{{ old('projClientImg') }}">
      </div>
      <textarea name="projClientInfo" id="clientInfo" placeholder="About Client..." title="client description" required>{{$project->project_cAbout}}</textarea>
      <img src="../images/logos/{{$project->project_cLogo}}" alt="client logo" style="max-height: 200px; max-width: 200px;">
    </div>

    <div class="newProjGallery formSection dynamicSection">
      <div class="divider"></div>

      <p class="subTitle">gallery</p>


      <div class="galleryFile" id="editGallery">

        <div id="galleryPreview">

          @foreach ($galleryImgs as $galleryImg)
          <img src="../images/{{$galleryImg->gallery_src}}" alt="client logo" style="max-height: 200px; max-width: 200px;">
          @endforeach

        </div>

        <div id="uploadContainer">
          <div class="multiUpload"><i class="fas fa-upload"></i></div>
          <p class="smallTitle multi">upload multiple... </p>
        </div>

          <input type="file" name="projGalleryImg[]" id="projGalleryImg" multiple>

          <div id="fileNames">
            <ul></ul>
          </div>

        </div>


       </div>

    </div>

    <!-- <p class="addInput" id="addGallery">+add image</p> -->
    <button type="submit" name="submit" class="button" id="submit">SUBMIT</button>

  </form>
</section>
@endsection

@section('cmsScript')
<script src="/js/add_input.js"></script>
@endsection
