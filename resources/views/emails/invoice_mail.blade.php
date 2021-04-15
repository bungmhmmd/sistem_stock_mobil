<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Pembelian</title>
</head>
<body>
    <h2>Hai, {{ $data_penjualan->nama }}</h2>
    <p>Terima kasih telah melakukan transaksi pada aplikasi kami, berikut detail pembelian:</p><br>
    <p>Nama : {{ $data_penjualan->nama }}</p>
    <p>Email : {{ $data_penjualan->Email }}</p>
    <p>No. Telepon : {{ $data_penjualan->no_telp }}</p>
    <p>Mobil : {{ $data_penjualan->data_mobil->nama }}</p>
    <p>Harga : {{ $data_penjualan->data_mobil->harga }}</p>
    <p><strong>Terima kasih atas Pembelianya</strong></p>
</body>
</html>