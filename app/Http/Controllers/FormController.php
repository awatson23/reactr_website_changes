<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Data;
use Illuminate\Support\Facades\Input;
use App\Mail\contactMail;
use App\Mail\applyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
  /**
  * Send an email.
  *
  * @param  Request  $request
  * @return Response
  */


  public function homeMail(Request $request)//contact from home page
  {
    //validate input
    $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
      'email' => 'required|email',
      'intrest' => '',
      'body' => 'required|max:500',
    ]);

    $errors = $validator->errors();
    // dd($validator);

    // if the validator fails
    if ($validator->fails()) {

      return redirect('/')
      ->withErrors($validator) // send back all errors
      ->withInput();

    } else {
      $data = [
        'name' => filter_var(request('name'),FILTER_SANITIZE_SPECIAL_CHARS),
        'email' => filter_var(request('email'),FILTER_SANITIZE_EMAIL),
        'interest' => filter_var(request('interest'),FILTER_SANITIZE_SPECIAL_CHARS),
        'body' => filter_var(request('body'),FILTER_SANITIZE_SPECIAL_CHARS)
      ];

      // \Mail::send('email.contact', $data, function ($message) use ($data){
      //   $message->from($data['email'], $data['name']);
      //   $message->subject($data['interest']);
      // });

      //create new mail and send it with input data
      Mail::to('n_aguillon@fanshawec.ca')->send(new contactMail($data));

      return redirect('/#contactUs')->with('status', 'Email has been sent!');
    }
  }














  public function teamMail(Request $request) //contact from team page
  {
    //validate
    $validator = Validator::make($request->all(), [
      'firstName' => 'required|max:255',
      'lastName' => 'required|max:255',
      'program' => 'required|max:255',
      'year' => 'required|max:255',
      'studentNumber' => 'required|numeric',
      'linkedin' => 'required|max:255',
      'folemail' => 'required|email|max:255',
      'email' => 'required|email|max:255',
      'skills' => 'required|max:255',
      'resume' => 'file|mimes:doc,rtf,docx,txt,odf,pdf,xml',
      'portfolio' => 'required|max:255',
    ], [
      'resume.mimes' => 'file must be a text file ending in .doc .rtf .docx .txt .odf .pdf .xml'
    ]);



    // if the validator fails
    if ($validator->fails()) {
      $errors = $validator->errors();
      //dd($errors);

      // dd($validator);
      return redirect('/team#applyHere')
      ->withErrors($validator)
      ->withInput($request->all());

    } else { //collect data
      $data = [
        'firstName' => request('firstName'),
        'lastName' => request('lastName'),
        'program' => request('program'),
        'year' => request('year'),
        'studentNumber' => request('studentNumber'),
        'linkedin' => request('linkedin'),
        'folemail' => request('folemail'),
        'email' => request('email'),
        'skills' => request('skills'),
        'resume' => Input::file('resume'),
        'portfolio' => request('portfolio')
      ];

      // \Mail::send('email.contact', $data, function ($message) use ($data){
      //   $message->from($data['email'], $data['name']);
      //   $message->subject($data['interest']);
      // });


      //send mail
      Mail::to('n_aguillon@fanshawec.ca')->send(new applyMail($data));
      return redirect('/team#applyHere')->with('status', 'Email has been sent!')->withInput();
    }
  }





























  public function jobMail(Request $request) //contact from job opportunity page
  {
//validate
    $validator = Validator::make($request->all(), [
      'firstName' => 'required|max:255',
      'lastName' => 'required|max:255',
      'program' => 'required|max:255',
      'year' => 'required|max:255',
      'studentNumber' => 'required|numeric',
      'linkedin' => 'required|max:255',
      'folemail' => 'required|email|max:255',
      'email' => 'required|email|max:255',
      'skills' => 'required|max:255',
      'resume' => 'file|mimes:doc,rtf,docx,txt,odf,pdf,xml',
      'portfolio' => 'required|max:255',
    ]);



    // if the validator fails
    if ($validator->fails()) {
      // dd($validator);
      $messages = $validator->messages();
      return redirect()->back()
      ->withErrors($validator)
      ->withInput($request->all());

    } else {
      $data = [
        'firstName' => request('firstName'),
        'lastName' => request('lastName'),
        'program' => request('program'),
        'year' => request('year'),
        'studentNumber' => request('studentNumber'),
        'linkedin' => request('linkedin'),
        'folemail' => request('folemail'),
        'email' => request('email'),
        'skills' => request('skills'),
        'resume' => Input::file('resume'),
        'portfolio' => request('portfolio')
      ];
      
      //send mail
      Mail::to('n_aguillon@fanshawec.ca')->send(new applyMail($data));

      return Redirect::back()->with('status', 'Email has been sent!')->withInput($request->all());
    }
  }

}
