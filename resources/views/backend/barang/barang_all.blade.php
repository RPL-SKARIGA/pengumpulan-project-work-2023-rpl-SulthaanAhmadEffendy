@extends('layouts.admin')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Spareparts</h4>
                    <a href="{{route('barang.create')}}" class="btn btn-dark btn-rounded waves-effect waves-light">
                        <i class="fas fa-plus-circle"></i> Tambah Barang
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Spareparts</h4>
                <div class="row mb-3">
                    <div class="col-md-5">
                        <form action="{{ route('barang.search') }}" method="GET" class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari barang...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7 text-right">
                        <form action="{{ route('barang.index') }}" method="GET" class="d-inline">
                            <button type="submit" class="btn btn-link">Refresh</button>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->keterangan_barang }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', ['id' => $item->id]) }}" class="btn btn-info sm" title="Edit Data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="deleteForm{{ $item->id }}" action="{{ route('barang.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger sm delete-btn" data-id="{{ $item->id }}" title="Delete Data">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>



@endsection
