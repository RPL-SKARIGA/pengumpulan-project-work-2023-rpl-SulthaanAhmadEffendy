<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis;
use RealRashid\SweetAlert\Facades\Alert;



class BarangController extends Controller
{
    public function index()
    {

        $barang = Barang::all();
        return view('backend.barang.barang_all', compact('barang'));
    }







    public function create()
    {
        $jenis = Jenis::all();
        return view('backend.barang.barang_add', compact('jenis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Barang::$rules, Barang::$messages);

        Barang::create($validatedData);
        toast('Data Berhasil Ditambahkan', 'success');
        return redirect()->route('barang.index');
    }
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $jenis = Jenis::all();


        return view('backend.barang.barang_edit', compact('barang', 'jenis'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'keterangan_barang' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($validatedData);
        toast('Data Berhasil Diedit', 'success');

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        toast('Data Berhasil Dihapus', 'success');


        return redirect()->route('barang.index');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $barang = Barang::where('nama_barang', 'like', '%' . $search . '%')
            ->orWhere('keterangan_barang', 'like', '%' . $search . '%')
            ->get();
        return view('backend.barang.barang_all', compact('barang'));
    }
}
