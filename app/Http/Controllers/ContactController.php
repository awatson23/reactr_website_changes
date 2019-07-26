<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
    {
       
        $activeContact ='activeContact';
        return view('pages.contact')->with('activeContact', $activeContact);
    }
}
