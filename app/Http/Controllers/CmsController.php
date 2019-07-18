<?php

namespace App\Http\Controllers;

// calls on all models and other required files
use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Storage;
use App\Projects;
use App\Tech;
use App\Features;
use App\Gallery;
use App\Teams;
use App\Testimonials;

class CmsController extends Controller
{


  //cms project archive page
  public function cmsProjects()
  {
    $projects = Projects::all()->sortByDesc("project_date"); //grabs all the projects
    return view('cms.projectArchive')->with('projects', $projects);
  }





  //cms search Projects in archive
  public function search()
  {
    $value = request('searchProjects');
    $projects = Projects::where('project_name', 'LIKE', '%'.$value.'%')->get(); // collects all projects that contain letters like in the search
    $projects = $projects->sortByDesc("project_date"); //orders projects
    return view('cms.projectArchive')->with('projects', $projects); //sends projects to view
  }






  //VIEW PROJECT
  public function viewProject($id)
  {
    $project = Projects::find($id);//grabs prject by specific id
    $feats = Projects::find($id)->features;//Grabs all features according to project id
    $teams = Projects::find($id)->teamMembers;//grabs the team members info who have worked on the project
    $techs = Projects::find($id)->tech; //grabs all the tech that was used in the project
    $galleryImgs = Projects::find($id)->gallery; //grabs all gallery images for that project
    //sends all data to view
    return view('cms.viewProject')->with('project', $project)->with('feats', $feats)->with('teams', $teams)->with('techs', $techs)->with('galleryImgs', $galleryImgs);
  }





  //CREATE PROJECT
  public function createProject()
  {
    $techs = Tech::all(); //grabs all tech
    $teams = Teams::all(); //grabs all team members
    return view('cms.createProject')->with('techs', $techs)->with('teams', $teams); //returns view with empty inputs
  }





  //SAVE PROJECT
  public function saveProject(Request $request) //saves the project into the db
  {
    //but first, validate.
    //the ones with .* are an array and lvalidates each item
    //if validation fails it goes back and displays errors, if its good it continues
    \Validator::make($request->all(), [
      'projTitle' => 'required|max:255',
      'projType' => 'required|max:255',
      'projFund' => 'required|max:255',
      'projYear' => 'required|numeric',
      'projBrief' => 'required|max:255',
      'projAbstract' => 'required|max:255',
      'projClientName' => 'required|max:255',
      'projClientInfo' => 'required|max:255',
      'projQuote' => 'required|max:255',
      'projQuoteName' => 'required|max:255',
      'projThumbnail' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      'projHeroImg' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      'projAbstractImg' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      'projFeatImg' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      'projClientImg' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      'newMember.*' => 'required',
      'projFeature.*' => 'required|max:255',
      'projFeatureDesc.*' => 'required|max:255',
      'projGalleryImg.*' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
      ])->validate();


      //collect these variables for use later
      $projName = Request('projTitle');
      $homeFeature = Request('homeFeature');
      $homeImg = str_replace(" ", "_", $projName) . "_home.jpg";
      //if project should be featured on homepage, grab the file and save it
      // $homeFeature = isset($homeFeature) ? $homeFeature : 0; //if it has a value let it be that value, if it doesnt have a value, make the value be 0
      if ($homeFeature == 1) {
        $homeImgPath = $request->file('projHomeImg')->move(public_path('images'), $homeImg);
      }else {
        $homeFeature = 0;
      };

      //renaming files
      //thumbnail
      $thumbImg = str_replace(" ", "_", $projName) . "_thumb.png";
      //detail img
      $detailImg = str_replace(" ", "_", $projName) . "_detail.png";
      //abstract image
      $absImg = str_replace(" ", "_", $projName) . "_abstract.png";
      //feature image
      $featImg = str_replace(" ", "_", $projName) . "_feat.png";

      //client Logo
      $clientName = Request('projClientName');
      $clientLogo = str_replace(" ", "_", $clientName). "_c_logo.png";

      //check to see if theyre there, get, rename and store photos
      if ($request->file('projThumbnail')){
        $thumbImgPath = $request->file('projThumbnail')->move(public_path('images'), $thumbImg);
      }
      if ($request->file('projHeroImg')){
        $detailImgPath = $request->file('projHeroImg')->move(public_path('images'), $detailImg);
      }
      if ($request->file('projAbstractImg')){
        $absImgPath = $request->file('projAbstractImg')->move(public_path('images'), $absImg);
      }
      if ($request->file('projFeatImg')){
        $featImgPath = $request->file('projFeatImg')->move(public_path('images'), $featImg);
      }
      if ($request->file('projClientImg')){
        $cLogoPath = $request->file('projClientImg')->move(public_path('images/logos'), $clientLogo);
      }

      // store new project info into database
      $newProject = new Projects;
      $newProject->homeFeature = $homeFeature;
      $newProject->project_name = $projName;
      $newProject->project_type = Request('projType');
      $newProject->project_funder = Request('projFund');
      $newProject->project_date = Request('projYear');
      $newProject->project_brief = Request('projBrief');
      $newProject->project_abstract = Request('projAbstract');

      $newProject->project_cName = Request('projClientName');
      $newProject->project_cAbout = Request('projClientInfo');
      $newProject->project_cLogo = $clientLogo;
      $newProject->project_quote = Request('projQuote');
      $newProject->project_quoteby = Request('projQuoteName');

      //save file names into db
      //only save home image if set as a featured project
      if ($homeFeature == 1){
        $newProject->project_homeImg = $homeImg;
      }
      $newProject->project_thumbImg = $thumbImg;
      $newProject->project_detailImg = $detailImg;
      $newProject->project_absImg = $absImg;
      $newProject->project_featImg = $featImg;

      $newProject->save();

      //gets id and project info from database after it was saved first
      $recallProject = Projects::where('project_name', request('projTitle'))->first();
      $id = $recallProject->project_id;
      $newProject = Projects::find($id);


      $techList = Request('tech');
      //if anything in tech list then save it
      if ($techList) {
        $newProject->tech()->attach($techList);
      }

      //saves team memebers
      $teamList=Request('newMember');
      $newProject->teamMembers()->attach($teamList);


      //saves features
      $featureTitles = Request('projFeature');
      $featureDesc = Request('projFeatureDesc');

      // loops the creation of a new feature for the project
      for ($i=0; $i < count($featureTitles) ; $i++) {
        Features::create([
          'project_id' => $id,
          'title' => $featureTitles[$i],
          'feature' => $featureDesc[$i]
        ]);
      };

      //loops the creation of a new gallery image saved for the project
      $i=0;
      $photos = $request->file('projGalleryImg');//puts the array of images into a variable
      // print_r($photos);
      foreach ($photos as $photo) {
        $photoName = str_replace(" ", "_", $projName) . '_gallery_' . $i . '.png'; //creates the name of the photo
        $path = $photo->move(public_path('images'), $photoName); //saves the photo with that name
        Gallery::create([ //creates new instance of gallery
          'project_id' => $id,
          'gallery_src' => $photoName
        ]);
        $i++;
      }
      return redirect('/cmsProjects');
    }





    //EDIT PROJECT
    public function editProject($id)
    {
      $allTechs = Tech::all();//grabs all technology
      $allTeams = Teams::all();//grabs all team members
      $project = Projects::find($id);//grabs project by specific id
      $feats = Projects::find($id)->features;//Grabs all features according to project id
      $teams = Projects::find($id)->teamMembers;//grabs the team members info who have worked on the project
      $techs = Projects::find($id)->tech; //grabs all the tech that was used in the project
      $galleryImgs = Projects::find($id)->gallery;//grabs all gallery images
      return view('cms.editProject')->with('project', $project)->with('feats', $feats)->with('teams', $teams)->with('techs', $techs)->with('galleryImgs', $galleryImgs)->with('allTeams', $allTeams)->with('allTechs', $allTechs);
    }





    //UPDATE PROJECT
    public function updateProject(Request $request, $id)
    {
      //but first, validate.
      //the ones with .* are an array and lvalidates each item
      //if validation fails it goes back and displays errors, if its good it continues
      \Validator::make($request->all(), [
        'projTitle' => 'required|max:255',
        'projType' => 'required|max:255',
        'projFund' => 'required|max:255',
        'projYear' => 'required|numeric',
        'projBrief' => 'required|max:255',
        'projAbstract' => 'required|max:255',
        'projClientName' => 'required|max:255',
        'projClientInfo' => 'required|max:255',
        'projQuote' => 'required|max:255',
        'projQuoteName' => 'required|max:255',
        'projThumbnail' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        'projHeroImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        'projAbstractImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        'projFeatImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        'projClientImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        'newMember.*' => 'required',
        'projFeature.*' => 'required|max:255',
        'projFeatureDesc.*' => 'required|max:255',
        'projGalleryImg.*' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
        ])->validate();

        //creates variables that will be used later
        $projName = Request('projTitle');
        $homeFeature = Request('homeFeature');
        $clientName = Request('projClientName');

        // get project from database
        $project = Projects::find($id);

        //if project should be featured on homepage, and if there is a file, grab it and save it
        // $homeFeature = isset($homeFeature) ? $homeFeature : 0; //if it has a value let it be that value, if it doesnt have a value, make the value be 0
        if ($homeFeature == 1) {
          if ($request->file('projHomeImg')) {
            $homeImg = str_replace(" ", "_", $projName) . "_home.jpg";
            $homeImgPath = $request->file('projHomeImg')->move(public_path('images'), $homeImg);
          }
        }else {
          $homeFeature = 0;
        };

        //start updating the project
        $project->homeFeature =  $homeFeature;
        $project->project_name = $projName;
        $project->project_type = Request('projType');
        $project->project_funder = Request('projFund');
        $project->project_date = Request('projYear');
        $project->project_brief = Request('projBrief');
        $project->project_abstract = Request('projAbstract');

        $project->project_cName = Request('projClientName');
        $project->project_cAbout = Request('projClientInfo');

        //if there is a file here that means they want to change the image so save it
        if ($request->file('projClientImg')){
          unlink(public_path('images/logos').'/'.$project->project_cLogo);//delete old photo
          $clientLogo = str_replace(" ", "_", $clientName). "_c_logo.png";//create new photo name
          $cLogoPath = $request->file('projClientImg')->move(public_path('images/logos'), $clientLogo);//save new photo with new name
          $project->project_cLogo = $clientLogo;//save photo name into db
        }

        //continue changing and updating project
        $project->project_quote = Request('projQuote');
        $project->project_quoteby = Request('projQuoteName');

        //save files
        if ($request->file('projThumbnail')){
          //thumbnail
          unlink(public_path('images').'/'.$project->project_thumbImg);//delete old photo
          $thumbImg = str_replace(" ", "_", $projName) . "_thumb.png";//create new photo name
          $thumbImgPath = $request->file('projThumbnail')->move(public_path('images'), $thumbImg); //save new photo with name
          $project->project_thumbImg = $thumbImg; //save name into db
        }
        if ($request->file('projHeroImg')){
          //detail img
          unlink(public_path('images').'/'.$project->project_detailImg);//delete old photo
          $detailImg = str_replace(" ", "_", $projName) . "_detail.png";//create new photo name
          $detailImgPath = $request->file('projHeroImg')->move(public_path('images'), $detailImg);//save new photo with name
          $project->project_detailImg = $detailImg;//save name into db
        }
        if ($request->file('projAbstractImg')){
          //abstract image
          unlink(public_path('images').'/'.$project->project_absImg);//delete old photo
          $absImg = str_replace(" ", "_", $projName) . "_abstract.png";//create new photo name
          $absImgPath = $request->file('projAbstractImg')->move(public_path('images'), $absImg);//save new photo with name
          $project->project_absImg = $absImg;//save name into db
        }
        if ($request->file('projFeatImg')){
          //feature image
          unlink(public_path('images').'/'.$project->project_featImg);//delete old photo
          $featImg = str_replace(" ", "_", $projName) . "_feat.png";//create new photo name
          $featImgPath = $request->file('projFeatImg')->move(public_path('images'), $featImg);//save new photo with name
          $project->project_feaImg = $featImg;//save name into db
        }
        //save all that into into the database
        $project->save();


        $techList = Request('tech');
        //if anything in tech list then save it
        if ($techList) {
          $project->tech()->detach();
          $project->tech()->attach($techList);
        }

        $teamList=Request('newMember');
        //if anything in team list then save it
        if ($teamList){
          $project->teamMembers()->detach();
          $project->teamMembers()->attach($teamList);
        }

        //grab features from input
        $featureTitles = Request('projFeature');
        $featureDesc = Request('projFeatureDesc');

        $deletedFeats = Features::where('project_id', $id)->delete(); //delete all old features
        //recreate and make features according to new input
        for ($i=0; $i < count($featureTitles) ; $i++) {
          Features::create([
            'project_id' => $id,
            'title' => $featureTitles[$i],
            'feature' => $featureDesc[$i]
          ]);
        };

        //if there are any files in the array then...
        if($request->file('projGalleryImg')){

          //create an array of all old gallery images
          $galList = Gallery::where('project_id', $id)->pluck('gallery_src')->toArray();
          foreach ($galList as $item) {
            unlink(public_path('images').'/'.$item);//delete each old physical gallery image
          }
          $deletedGallery = Gallery::where('project_id', $id)->delete(); //delete all gallery rows in the database with this project id
          //create new gallery rows and save the files
          $i=0;
          $photos = $request->file('projGalleryImg'); //create array of gallery images
          // print_r($photos);
          foreach ($photos as $photo) { //for each photo in the array
            $photoName = str_replace(" ", "_", $projName) . '_gallery_' . $i . '.png'; //new name
            $path = $photo->move(public_path('images'), $photoName); //save photo
            Gallery::create([ //create new row in database
              'project_id' => $id,
              'gallery_src' => $photoName
            ]);
            $i++;
          }

        }

        return redirect('/cmsProjects');
      }









      //DELETE PROJECT
      public function deleteProject($id)
      {
        $project = Projects::find($id);//find the project
        $project->tech()->detach(); //remove the tech in relational table
        $project->teamMembers()->detach(); //remove the members in the relational table
        $deletedFeats = Features::where('project_id', $id)->delete(); //delete all features
        $galList = Gallery::where('project_id', $id)->pluck('gallery_src')->toArray(); //create an array of the gallery image names
        //delete images from storage
        if ($project->project_homeImg){ //if there is a
          unlink(public_path('images').'/'.$project->project_homeImg);
        }
        //wont delete placeholder images because each image name is unique
        unlink(public_path('images').'/'.$project->project_thumbImg);
        unlink(public_path('images').'/'.$project->project_detailImg);
        unlink(public_path('images').'/'.$project->project_featImg);
        unlink(public_path('images').'/'.$project->project_absImg);
        unlink(public_path('images/logos').'/'.$project->project_cLogo);

        foreach ($galList as $item) {
          unlink(public_path('images').'/'.$item); //delete each gallery image
        }

        $gallery = Gallery::where('project_id', $id)->delete(); //delete all gallery rows with that project id
        $project->delete(); //delete the project

        return redirect('/cmsProjects');
      }






































      //TEAMSSSS

      public function teamArchive()
      {
        $teams = Teams::all()->sortByDesc('st_team_id'); //get all team members
        return view('cms.teamArchive')->with('teams', $teams); //return view with data
      }

      public function searchTeam()
      {
        $value = request('searchMembers'); //get the search value
        $teams = Teams::where('st_team_fname', 'LIKE', '%'.$value.'%')->orWhere('st_team_lname', 'LIKE', '%'.$value.'%')->get(); //select all members with simialar letters to teh search (check first and last names)
        $teams = $teams->sortByDesc("st_team_id"); //sort the members
        return view('cms.teamArchive')->with('teams', $teams); //return view with data
      }

      public function newTeam()
      {
        return view('cms.createTeam'); //just go to the view, theres no data needed over there
      }

      public function saveTeam(Request $request)
      {
        //validate the incoming data, return with errors if needed
        \Validator::make($request->all(), [
          'first_name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'position' => 'required|max:255',
          'year' => 'required|numeric',
          'linkedIn' => 'nullable|url',
          'email' => 'nullable|email',
          'newTeamImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
          ])->validate();

          //create new team member row
          $newMember = new Teams;
          $newMember->st_team_fname = Request('first_name');
          $newMember->st_team_lname = Request('last_name');
          $newMember->st_team_bio = Request('position');
          $newMember->st_team_program = Request('program');
          $newMember->st_team_year = Request('year');
          $newMember->st_team_linkedin = Request('linkedIn', '');//if there is no input dont put anything
          $newMember->st_team_email = Request('email', '');//if there is no input dont put anything

          if($request->file('newTeamImg')){ //if there is an image that mean the user wants to change the file
            $memberImg = request('first_name') . '_' . request('last_name') . '.png'; //create new name
            $memberImgPath = $request->file('newTeamImg')->move(public_path('images/teams'), $memberImg); //save image with new name
            $newMember->st_team_ima = $memberImg; //save name into db
          }else{
            $newMember->st_team_ima = 'placeholder_man.png'; //if there is no image use a placeholder (in future add option of male or female)
          }

          $newMember->save();//save the new memeber into the database
          return redirect('/cmsTeam');
        }





        public function editTeam($id)
        {
          $team = Teams::find($id);//get the team member info
          return view('cms.editTeam')->with('team', $team); //send that data the the view, ready to edit
        }







        public function updateTeam(Request $request, $id)
        {

          //validate incoming data
          \Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'position' => 'required|max:255',
            'year' => 'required|numeric',
            'linkedIn' => 'nullable|url',
            'email' => 'nullable|email',
            'newTeamImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
            ])->validate();

            $member = Teams::find($id);//find the memebr in the db and start editig the values accordingly
            $member->st_team_fname = Request('first_name');
            $member->st_team_lname = Request('last_name');
            $member->st_team_bio = Request('position');
            $member->st_team_program = Request('program');
            $member->st_team_year = Request('year');
            $member->st_team_linkedin = Request('linkedIn', '');//if no input then just put nothing
            $member->st_team_email = Request('email', '');//if no input then just put nothing

            if($request->file('newTeamImg')){//if tehre is an image, change it
              unlink(public_path('images/teams').'/'.$team->st_team_ima);//delete old image
              $memberImg = request('first_name') . '_' . request('last_name') . '.png';//create new image name
              $memberImgPath = $request->file('newTeamImg')->move(public_path('images/teams'), $memberImg);//save new image with name
              $member->st_team_ima = $memberImg;//save name into database
            }

            $member->save();//save the changes
            return redirect('/cmsTeam');
          }





          public function deleteTeam($id)
          {
            $team = Teams::find($id);//find member
            unlink(public_path('images/teams').'/'.$team->st_team_ima);//delete photo
            $team->delete();//delete member in the database
            return redirect('/cmsTeam');
          }




































          //TECHNOLOGY
          public function techArchive()
          {
            $techs= Tech::all();//get all tech
            return view('cms.techArchive')->with('techs', $techs);//return view with data
          }



          public function searchTech()
          {
            $value = request('searchTech');//get search value
            $techs = Tech::where('tech_name', 'LIKE', '%'.$value.'%')->get(); //find all techs with names that contain the searching value
            return view('cms.techArchive')->with('techs', $techs);//return data into view
          }



          public function newTech()
          {
            return view('cms.createTech');//just go to the page, no data required
          }



          public function saveTech(Request $request)
          {
            //validate, validate, validate!
            \Validator::make($request->all(), [
              'tech' => 'required|max:255',
              'newTechImg' => 'required|file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
              ])->validate();//validate return to edit page if there are errors

              $newTech = new Tech;//create new tech row in database
              $newTech->tech_name = Request('tech');//get the name

              $techImg = str_replace(" ", "_", Request('tech')) . '.png';//create image name
              $techImgPath = $request->file('newTechImg')->move(public_path('images'), $techImg);//save image with name
              $newTech->tech_src = $techImg;//save name into db

              $newTech->save();//save new technology
              return redirect('/cmsTech');
            }

            public function editTech($id)
            {
              $tech = Tech::find($id);//find tech by id
              return view('cms.editTech')->with('tech', $tech);//return view with data
            }

            public function updateTech(Request $request, $id)
            {
              //again, validate.
              \Validator::make($request->all(), [
                'tech' => 'required|max:255',
                'newTechImg' => 'file|mimes:jpg,jpeg,png,gif,bmp,svg,tiff|max:2000',
                ])->validate();

                $tech = Tech::find($id);//find specific tech
                $tech->tech_name = Request('tech');

                if ($request->file('newTechImg')) {//if there is an image then change it to this new one
                  unlink(public_path('images').'/'.$tech->tech_src);//delete old image
                  $techImg = str_replace(" ", "_", Request('tech')) . '.png';//create new name
                  $techImgPath = $request->file('newTechImg')->move(public_path('images'), $techImg);//save image into folder
                  $tech->tech_src = $techImg;//save name into db
                }

                $tech->save();//save new tech
                return redirect('/cmsTech');//redirect when done
              }

              public function deleteTech($id)
              {
                $tech = Tech::find($id);// find tech by id
                unlink(public_path('images').'/'.$tech->tech_src);//delete image in folder
                $tech->delete();//delete tech row from database
                return redirect('/cmsTech'); //redirect
              }
            }
