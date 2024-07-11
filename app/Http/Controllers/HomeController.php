<?php

namespace App\Http\Controllers;

use App\Models\Dabout;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dabout = Dabout::get();
        $profile = Profile::get()->last();
        $experiences = Experience::get();
        $setting = Setting::first();

        return view('home.index', compact('profile', 'experiences', 'setting', 'dabout'));
    }
}
