<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class StaticPageController extends Controller
{
    function main(): View
    {
        return view('staticpages.home');
    }
    function contacts() {
        return view('staticpages.contacts');
    }
    function about() {

    }
    function privacy() {

    }
}
