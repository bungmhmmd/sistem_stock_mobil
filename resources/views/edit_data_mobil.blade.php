@extends('layouts.admin')

@section('title')
Sistem Stock Mobil - Edit Data Mobil
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mobil</li>
              <li class="breadcrumb-item active">Edit Data Mobil</li>
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
            <form id="validasi" novalidate   action="{{ route('data-mobil.edit_post') }}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Mobil</label>
                    <input type="text" name="nama" value="{{ $data_mobil->nama ?? '' }}" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Harga Mobil</label>
                    <input type="text" name="harga" value="{{ $data_mobil->harga ?? '' }}" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" name="stock" value="{{ $data_mobil->stock ?? '' }}" class="form-control" placeholder=""  required>
                </div>
                <div class="form-group ">
                    <input type="hidden" class="form-control" name="id" value="{{ $data_mobil->id}}">
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
        
    </script>
@endsection