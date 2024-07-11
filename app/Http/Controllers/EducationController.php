<?php

namespace App\Http\Controllers;



use App\Models\Daducation;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::get()->last();
        $daducation = Daducation::get();
        $title = "Data About";
        return view('education.index', compact( 'daducation',  'title', 'profile', ));
    }
}
