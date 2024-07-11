<?php

namespace App\Http\Controllers;

use App\Models\Dabout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Dabout::get();
        $title = "Data About";
        return view('dabout.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah About";
        return view('dabout.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dabout::create([
            'lahir'  => $request->lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $request->umur,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,

        ]);

        return redirect()->to('admin/dabout')->with('message', 'Data berhasil ditambah');
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
        $edit = Dabout::find($id);
        $title = "Edit Data " . $edit->name;
        return view('dabout.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Dabout::where('id', $id)->update([
            'lahir'  => $request->lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $request->umur,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->to('admin/dabout')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dabout::where('id', $id)->delete();
        return redirect()->to('admin/dabout')->with('message', 'Data berhasil dihapus');
    }
}
