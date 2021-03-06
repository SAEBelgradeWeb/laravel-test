<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactFormRequest;
use App\Mail\WelcomeMail;
use App\Mail\WelcomeMail2;
use App\Notifications\UserSubscribed;
use App\User;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

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
        $users = User::all();

        return view('welcome', compact('siteName', 'cars', 'header', 'users'));
    }

    public function contactForm()
    {
        return view('contact-form');
    }

    public function contactFormSubmit(ContactFormRequest $request)
    {
        Contact::create($request->all());
        Alert::warning('Warning Message', 'Optional Title');
        return redirect('/contact-form');

    }

    public function subscribe(Request $request) {
        $user = User::find(1);

        Mail::to($request->email)->send(new WelcomeMail2($request->email));

        $user->notify(new UserSubscribed());
    }
}
