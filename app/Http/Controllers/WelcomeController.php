<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller
{
    //
    // 
    // 
    public function welcome()
    {
        include_once (storage_path('app/public/plans.php'));
        return view('welcome')->with('plans', $plans);
    }
}
