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
        return view('pages.careers')->with('testimonials', $testimonials)->with('activeCareers', $activeCareers);
    }
}
