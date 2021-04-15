@extends('layouts.admin')

@section('title')
Sistem Stock Mobil - Tambah Data Penjualan
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mobil</li>
              <li class="breadcrumb-item active">Tambah Data Penjualan</li>
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
            <form id="validasi" novalidate   action="{{ route('data-penjualan.tambah_post') }}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Pilih Mobil</label>
                    {!! Form::select('id_data_mobil', $data_mobil, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    <a class="btn btn-warning" href="{{route('data-penjualan')}}">Kembali</a>
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
                                message: '<p style="color:red">Mohon masukan nama</p>'
                            }
                        }
                    },
                    email: {
                      validators: {
                        notEmpty: {
                        message: '<p style="color:red">Mohon masukan email</p>'
                        },
                        regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: '<p style="color:red">Alamat email tidak valid</p>'
                        }
                    }
                    },
                    no_telp: {
                        validators: {
                            notEmpty: {
                                message: '<p style="color:red">Mohon masukan no. telepon</p>'
                            }
                        }
                    },
                    id_data_mobil: {
                        validators: {
                            notEmpty: {
                                message: '<p style="color:red">Mohon pilih mobil</p>'
                            }
                        }
                    }
                }
            });

        });
    </script>
@endsection