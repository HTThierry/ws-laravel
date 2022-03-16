<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DbController extends Controller
{
    public function index() {
        $user = User::findOrFail(1);


        return view('db.index', ['user' => $user]);
    }
}
