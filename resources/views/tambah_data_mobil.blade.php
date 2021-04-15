@extends('layouts.admin')

@section('title')
Sistem Stock Mobil - Tambah Data Mobil
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mobil</li>
              <li class="breadcrumb-item active">Tambah Data Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <form id="validasi" novalidate   action="{{ route('data-mobil.tambah_post') }}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Mobil</label>
                    <input type="text" name="nama" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Harga Mobil</label>
                    <input type="text" name="harga" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" name="stock" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group ">
                    <a class="btn btn-warning" href="{{route('data-mobil')}}">Kembali</a>
                    <button type="submit" class="btn btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
    $(function () {
        $('#validasi').bootstrapValidator({
            fields: {
                nama: {
                    validators: {
                        notEmpty: {
                            message: '<p style="color:red">Mohon masukan nama mobil</p>'
                        }
                    }
                },
                harga: {
                    validators: {
                        notEmpty: {
                            message: '<p style="color:red">Mohon masukan harga mobil</p>'
                        }
                    }
                },
                stock: {
                    validators: {
                        notEmpty: {
                            message: '<p style="color:red">Mohon masukan stock mobil</p>'
                        }
                    }
                }
            }
        });

    });
    </script>
@endsection