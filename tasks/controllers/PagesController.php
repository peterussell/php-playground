<?php

class PagesController
{
  public function home() {
    // Receive the request
    // Delegate (eg. ask DB for records)
    // Return the response
    return view('index', ['names' => $users]);
  }

  public function about() {
    $company = 'GroundSchool NZ';
    return view('about', ['company' => $company]);
  }

  public function contact() {
    return view('contact');
  }
}
