<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialController extends Controller
{
    //TEAM PAGE
    public function getAllTestimonials(){
      //grabs all team/student testimonies
      $testimonials = Testimonials::All();
      $headerStyle = 'background-color: #eb8e30;';
      $footerStyle = 'background-color: #eb8e30;';//header colour for view
      $activeAbout = 'activeAbout';
      return view('pages.team')->with('testimonials', $testimonials)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle)->with('activeAbout', $activeAbout);
    }

}
