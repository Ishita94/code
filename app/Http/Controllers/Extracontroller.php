<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Extracontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('extra');
    }
}