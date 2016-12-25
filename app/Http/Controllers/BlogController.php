<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\Customer;

class BlogController extends Controller
{
    public function list() {
      $blog = blog::all();
      return view('bloglist', compact('blog'));
    }

    public function detail($id) {
      $blog = blog::find($id);
      return view('blogdetail', compact('blog'));
    }
}
