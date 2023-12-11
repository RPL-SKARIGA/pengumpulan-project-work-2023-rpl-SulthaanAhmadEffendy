<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'tb_barang';
    protected $fillable = ['nama_barang', 'keterangan_barang', 'id_jenis'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }

    public static $rules = [
        'nama_barang' => 'required|unique:tb_barang',
        'keterangan_barang' => 'required',
        'id_jenis' => 'required',
    ];

    public static $messages = [
        'nama_barang.required' => 'Nama barang harus diisi',
        'nama_barang.unique' => 'Nama barang sudah ada',
        'keterangan_barang.required' => 'Keterangan barang harus diisi',
        'id_jenis.required' => 'Jenis barang harus dipilih',
    ];
}
