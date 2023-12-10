@extends('master2')
@section('judulhalaman','Tugas Pra UAS')
@section('konten')
    <h2>Tugas Pra UAS</h2>

	<h3>Tambah Laptop</h3>

	<a href="/tugasprauas" class="btn btn-success"> ← Kembali</a>

	<br/>
	<br/>

	<form action="/tugasprauas/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merklaptop" class="col-sm-2 col-form-label">Merk Laptop</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="merklaptop" name="merklaptop">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocklaptop" class="col-sm-2 col-form-label">Stock Laptop</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="stocklaptop" name="stocklaptop">
            </div>
        </div>
        <div class = "form-group d-flex flex-row">
            <label for = "tersedia" class = "control-label">Ketersedian barang</label>
            <input class="col-sm-1 ml-4"  name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
