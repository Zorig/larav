<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class IndexController extends Controller
{
    //
    public function index() {
        $last3blog = blog::all();
        return view('index', compact('last3blog'));
    }
}
