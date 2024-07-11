<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::get();
        $title = "Data Skill";
        return view('skill.index', compact('skill', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Skill";
        return view('skill.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::create([
            'nama_skill'  => $request->nama_skill,
            'level_skill' => $request->level_skill,

        ]);

        return redirect()->to('admin/skill')->with('message', 'Data berhasil ditambah');
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
        $edit = Skill::find($id);
        $title = "Edit Data " . $edit->name;
        return view('Skill.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Skill::where('id', $id)->update([
            'nama_skill'  => $request->nama_skill,
            'level_skill' => $request->level_skill,

        ]);

        return redirect()->to('admin/skill')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        return redirect()->to('admin/skill')->with('message', 'Data berhasil dihapus');
    }
}
