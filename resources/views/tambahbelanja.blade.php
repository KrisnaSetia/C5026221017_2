@extends('master2')
@section('judulhalaman','Keranjang Belanja')
@section('konten')

	<h3>Beli Belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-success"> ← Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga per Item</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="harga" name="harga">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
