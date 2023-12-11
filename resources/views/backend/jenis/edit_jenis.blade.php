@extends('layouts.admin')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Jenis </h4><br><br>

                            <form method="post" action="{{ route('jenis.update', ['id' => $jenis->id]) }}" id="myForm">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Jenis </label>
                                    <div class="form-group col-sm-10">
                                        <input name="nama_jenis" value="{{ $jenis->nama_jenis }}" class="form-control" type="text">
                                    </div>
                                </div>
                             
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Jenis">
                            </form>

                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myForm').validate({
                rules: {
                    nama_jenis: {
                        required: true,
                    },
                },
                messages: {
                    nama_jenis: {
                        required: 'Mohon Masukkan Nama Jenis',
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });

    </script>

@endsection
