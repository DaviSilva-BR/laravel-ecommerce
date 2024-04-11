<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = [];
        return view("site.index");
    }

    public function categoria()
    {
        $data = [];
        return view("site.categoria");
    }
} 
