<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index() 
    {
        $name = "Aulia Silmi Mardiyanti";
        $lesson = ["Interpersonal skill", "Mathematics"];
        return view('home', compact('name', 'lesson'));
    }
}
