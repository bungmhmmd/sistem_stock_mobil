@extends('layouts.admin')

@section('title')
Sistem Stock Mobil - Data Penjualan
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penjualan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('warning'))
      <div class="alert alert-warning">{{ session('warning') }}</div>
    @endif
    @if (session('danger'))
      <div class="alert alert-danger">{{ session('danger') }}</div>
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
            <a href="{{ route('data-penjualan.tambah') }}" class="btn btn-block btn-primary">Tambah Data Penjualan</a>
        </div>
      </div>
        <div class="card">
            <div class="card-body">
                <table id="tabel_penjualan" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No.telepon</th>
                        <th>Mobil</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp 
                        @forelse ($data_penjualan as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->no_telp }}</td>
                            <td>{{ $row->data_mobil->nama }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>No.telepon</th>
                          <th>Mobil</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        $(function () {
            $('#tabel_penjualan').DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection