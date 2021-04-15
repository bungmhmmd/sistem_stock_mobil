@extends('layouts.admin')

@section('title')
Sistem Stock Mobil 
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Data Hari Ini</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mobil paling banyak dijual</td>
                        <td>{{ $terbanyak_hariini }}</td>
                    </tr>
                    <tr>
                        <td>Penjualan Hari ini</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Total Penjualan Hari ini</td>
                        <td>10000000</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Data 7 Hari Terkakhir</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mobil paling banyak dijual</td>
                            <td>Avanza</td>
                        </tr>
                        <tr>
                            <td>Penjualan 7 Hari terkahir</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Total Penjualan 7 Hari terkahiri</td>
                            <td>10000000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
