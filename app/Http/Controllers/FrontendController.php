<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function loadhome(){
        return view("index");
    }

    public function loadNewsEvents(Request $request){
        $user = User::where("id", 1)->value("name");
        dd($user);

        return view("NewsEvents.newsandevents");
    }
}
