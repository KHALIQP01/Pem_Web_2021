<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // PAGE SEBELUM LOGIN

    public function index()
    {
        return view('home');
    }
    public function last()
    {
        return view('last');
    }
    public function kolibri()
    {
        return view('kolibri');
    }
    public function cendet()
    {
        return view('cendet');
    }
    public function cucakrowo()
    {
        return view('cucakrowo');
    }
    public function cucakhijau()
    {
        return view('cucakhijau');
    }
    public function kacer()
    {
        return view('kacer');
    }
    public function muraibatu()
    {
        return view('muraibatu');
    }
    public function information()
    {
        return view('information');
    }
    public function aboutme()
    {
        return view('aboutme');
    }
}
