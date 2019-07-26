<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    { 
        $headerStyle = 'background-color: #b2da69;';
        $footerStyle = 'background-color: #b2da69;';
        $activePartner ='activePartner';
        return view('pages.partner')->with('activePartner', $activePartner)->with('headerStyle', $headerStyle)->with('footerStyle', $footerStyle);
    }
}
