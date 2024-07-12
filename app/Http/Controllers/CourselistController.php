<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourselistController extends Controller
{
    public function index(){
        return view("courselist.courselist");
    }
}
