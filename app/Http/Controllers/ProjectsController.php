<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use App\Award;

class ProjectsController extends Controller
{

    //HOME PAGE
    public function home(){
      $projects = Projects::groupBy('project_id')->having('homeFeature', '>', 0)->get();//grabs the most recent 6 projects
      $headerStyle = 'background-color: transparent;';
      $footerStyle = 'background-color: #01bec0';
      $activeHome = 'activeHome';
      return view('pages.home')->with('projects', $projects)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle)->with('activeHome', $activeHome);
    }



    //ARCHIVE PAGE
    public function getAllProjects(){
      //$projects = Projects::all(); //grabs all the projects

      $projects =  Projects::with('awards')->orderBy('project_year', 'desc')->get();

      //$projects = Projects::all()->awards->sortByDesc("project_date");
      $headerStyle = 'background-color: #f85177 !important;';
      $footerStyle = 'background-color: #f85177 !important;';
      $activeProjects = 'activeProjects';
      return view('pages.archive')->with('projects', $projects)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle)->with('activeProjects', $activeProjects);
      //return $projects;
    }



    //DETAIL PAGE
    public function getProjectById($id){
      $project = Projects::find($id);//grabs prject by specific id
      $feats = Projects::find($id)->features;//Grabs all features according to project id
      $teams = Projects::find($id)->teamMembers;//grabs the team members info who have worked on the project
      $techs = Projects::find($id)->tech; //grabs all the tech that was used in the project
      $galleryImgs = Projects::find($id)->gallery;//grabs all gallery rows affiliated with this project
      $headerStyle = 'background-color: #5549F9 !important;';//header colour for the view
      $footerStyle = 'background-color: #5549F9 !important;';//footer colour for the view
      return view('pages.details')->with('project', $project)->with('feats', $feats)->with('teams', $teams)->with('techs', $techs)->with('galleryImgs', $galleryImgs)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle);
    }

}
