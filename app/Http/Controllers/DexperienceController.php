<?php

namespace App\Http\Controllers;



use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DexperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::get();
        $profile = Profile::get()->last();
        $title = "Data About";
        return view('dexperience.index', compact('experience', 'title', 'profile',));
    }
}
