<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function index(){
        return view("layouts/home");
    }
    public function about(){
        return view("layout/about");
    }
}
