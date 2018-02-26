<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomizationController extends Controller
{
    public function create()
    {
    	return view('customization.customization');
    }
    
    public function store()
    {

    }
}
