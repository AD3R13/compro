<?php

namespace App\Http\Controllers;

use App\Models\Daducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Daducation::get();
        $title = "Data Education";
        return view('daducation.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Education";
        return view('daducation.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Daducation::create([
            'nama' => $request->nama,
            'kejuruan' => $request->kejuruan,
            'masuk' => $request->masuk,
            'kelulusan' => $request->kelulusan,

        ]);

        return redirect()->to('admin/daducation')->with('message', 'Data berhasil ditambah');
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
        $edit = Daducation::find($id);
        $title = "Edit Data " . $edit->name;
        return view('daducation.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Daducation::where('id', $id)->update([
            'nama' => $request->nama,
            'kejuruan' => $request->kejuruan,
            'masuk' => $request->masuk,
            'kelulusan' => $request->kelulusan,

        ]);

        return redirect()->to('admin/daducation')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Daducation::where('id', $id)->delete();
        return redirect()->to('admin/daducation')->with('message', 'Data berhasil dihapus');
    }
}
