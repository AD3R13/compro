<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::get();
        $title = "Data Pengalaman";
        $title = 'Tambah Data';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('experience.index', compact('experience', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pengalaman";
        return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::create([
            'job_title'  => $request->job_title,
            'company_name' => $request->company_name,
            'job_description' => $request->job_description,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
        ]);
        Alert::success('Hore!', 'Data berhasil ditambah');

        return redirect()->to('admin/experience')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // select * from tbluser where id = id
        $edit = Experience::find($id);
        $title = "Edit Data " . $edit->job_title;
        return view('experience.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Experience::where('id', $id)->update([
            'job_title'  => $request->job_title,
            'company_name' => $request->company_name,
            'job_description' => $request->job_description,
            'date_start' => $request->date_start,
            'date_finish' => $request->date_finish,
        ]);

        return redirect()->to('admin/experience')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return $id;
        Experience::where('id', $id)->delete();
        alert()->success('Hore!', 'Data berhasil dihapus');
        return redirect()->to('admin/experience')->with('message', 'Data berhasil dihapus');
    }
}
