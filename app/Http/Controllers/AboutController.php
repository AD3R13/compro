<?php

namespace App\Http\Controllers;

use App\Models\Dabout;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::get();
        $experience = Experience::get()->first();
        $dabout = Dabout::get()->last();
        $profile = Profile::get()->last();
        $datas = Dabout::get();
        $title = "Data About";
        return view('about.index', compact('skill', 'experience', 'datas', 'title', 'profile', 'dabout'));
    }
}
