<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data["title"]= "Sai Srungavarapu blog";

        return view("home/index", $data); 
    }
}
