<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    public function welcomePage()
    {
//        if($lang == "rs") {
//            App::setLocale('rs');
//        }
        $siteName = "My First Laravel Site";

        $cars = collect(['mazda', 'honda', 'toyota']);

        $header = "<h1>Ovo je header</h1>";

        return view('welcome', compact('siteName', 'cars', 'header'));
    }
}
