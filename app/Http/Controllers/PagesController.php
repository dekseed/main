<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
      return view('pages.welcome');
  }

  public function blog()
  {
      return view('pages.blog.index');
  }
  public function contact()
  {
      return view('pages.contact');
  }
  public function tenders()
  {
      return view('pages.tenders');
  }
  public function downloads()
  {
      return view('pages.downloads');
  }
}
