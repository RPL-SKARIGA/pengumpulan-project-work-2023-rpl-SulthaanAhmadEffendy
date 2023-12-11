@extends('layouts.admin')
@section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Tambahkan Data</h4><br><br>
            
  

            <form method="post" action="{{ route('barang.store') }}" id="myForm" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Barang </label>
                <div class="form-group col-sm-10">
                    <input name="nama_barang" class="form-control" type="text"    >
                    @error('nama_barang')
            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
          


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan Barang </label>
                <div class="form-group col-sm-10">
                    <input name="keterangan_barang" class="form-control" type="text"    >
                    @error('keterangan_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
            </div>

            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Barang </label>
                <div class="form-group col-sm-10">
                    <select name="id_jenis" class="form-control">
                        @foreach($jenis as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_jenis }}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_jenis')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>



           

 
 


        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Tambah +">
            </form>
             
           
           
        </div>
    </div>
</div> 
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                nama_barang: {
                    required : true,
                }, 
                 keterangan_barang: {
                    required : true,
                }
            },
            messages :{
                nama_barang: {
                    required : 'Mohon Masukkan Nama',
                },
                deskripsi_barang: {
                    required : 'Mohon Masukkan Deskripsi',
                },
            
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 
@endsection 
