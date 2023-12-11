<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('backend.jenis.jenis_all', compact('jenis'));
    }

    public function create()
    {
        return view('backend.jenis.tambah_jenis');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Jenis::$rules, Jenis::$messages);

        Jenis::create($validatedData);
        toast('Data Berhasil Ditambahkan', 'success');

        return redirect()->route('jenis.index');
    }

    public function edit($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('backend.jenis.edit_jenis', compact('jenis'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_jenis' => 'required',
        ]);

        $jenis = Jenis::findOrFail($id);
        $jenis->update($validatedData);
        toast('Data Berhasil Diedit', 'success');

        return redirect()->route('jenis.index');
    }

    public function destroy($id)
    {
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('jenis.index');
    }
}
