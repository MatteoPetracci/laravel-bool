<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        //In questo caso deve ritornare il file index che ho creato nella cartella static
        return view('static.index');
    }
}
