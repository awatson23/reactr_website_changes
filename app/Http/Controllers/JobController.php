<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Jobs;

class JobController extends Controller
{
  //JOB DESCRIPTION PAGE
  public function getJobInfo($type)
  {
    $headerStyle = 'background-color: #f24c72;'; //colour of header for the view
    $footerStyle = 'background-color: #f24c72;';
    //hardcoded array for each job
    if ($type=='workstudy') { //if this is the job type selected this is the data that will be passed to the view
      $title = 'Work Study';
      $opportunity = 'As part of a project team, the Work Study position is primarily responsible for PHP-mySQL, Javascript and HTML/CSS development as required for each specific project. Also responsible for learning team workflow tools and processes, client communication and presentation. Students work under the direction and supervision of Reactr faculty and staff.';
      $listItems = ['Write Object-Oriented PHP', 'Work with popular PHP MVC frameworks', 'Write HTML, CSS and JavaScript', 'Work with public APIs', 'Write CSS transitions, JS animations, etc. as required'];
    }elseif ($type == 'frontend') { //if this is the job type selected this is the data that will be passed to the view
      $title = 'Front End Web Developer';
      $opportunity = 'As part of a project team, the Front End Developer is primarily responsible for design, JavaScript and HTML/CSS development as required for each specific project. Also responsible for learning team workflow tools and processes, client communication and presentation. Students work under the direction and supervision of Reactr faculty and staff.';
      $listItems = ['Write HTML, CSS and JavaScript', 'Work with public APIs', 'Write CSS transitions, JS animations, etc. as required'];
    }elseif ($type == 'fullstack') { //if this is the job type selected this is the data that will be passed to the view
      $title = 'Full Stack Web Developer';
      $opportunity = 'As part of a project team, the Full Stack Developer is primarily responsible for PHP-mySQL, Javascript and HTML/CSS development as required for each specific project. Also responsible for learning team workflow tools and processes, client communication and presentation. Students work under the direction and supervision of Reactr faculty and staff.';
      $listItems = ['Write Object-Oriented PHP', 'Work with popular PHP MVC frameworks', 'Write HTML, CSS and JavaScript', 'Work with public APIs', 'Write CSS transitions, JS animations, etc. as required'];
    }elseif ($type == 'backend') { //if this is the job type selected this is the data that will be passed to the view
      $title = 'Back End Web Developer';
      $opportunity = 'As part of a project team, the Back End Developer is primarily responsible for PHP-mySQL development as required for each specific project. Also responsible for learning team workflow tools and processes, client communication and presentation. Students work under the direction and supervision of Reactr faculty and staff.';
      $listItems = ['Write Object-Oriented PHP', 'Work with popular PHP MVC frameworks', 'Work with public APIs'];
    }

    return view('pages.job')->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle)->with('title', $title)->with('opportunity', $opportunity)->with('listItems', $listItems);
  }

}
