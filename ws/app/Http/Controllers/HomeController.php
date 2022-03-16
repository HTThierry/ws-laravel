<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $message = "Salut salut, t'as deux minutes?";
        return view('home.index', ['message' => $message]);
    }
}
