@extends('layouts.admin')
@section('content')

<div class="page-content">
    <div class="container-fluid">

     
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Barang</h4>

                        <form method="post" action="{{ route('barang.update', ['id' => $barang->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="form-group col-sm-10">
                                    <input name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="keterangan_barang" class="col-sm-2 col-form-label">Keterangan Barang</label>
                                <div class="form-group col-sm-10">
                                    <input name="keterangan_barang" value="{{ $barang->keterangan_barang }}" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
                                <div class="form-group col-sm-10">
                                    <select name="id_jenis" class="form-control">
                                        @foreach($jenis as $item)
                                            <option value="{{ $item->id }}" @if($item->id == $barang->jenis->id) selected @endif>
                                                {{ $item->nama_jenis }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
</div>

@endsection

