<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;

class CareerController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::All();
        $activeCareers ='activeCareers';
        $headerStyle = 'background-color: #f24c72;';
        $footerStyle = 'background-color: #f24c72';
        return view('pages.careers')->with('testimonials', $testimonials)->with('activeCareers', $activeCareers)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle);
    }
}
