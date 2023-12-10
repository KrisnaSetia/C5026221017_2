@extends('master2')
@section('judulhalaman','Tugas Pra UAS')
@section('konten')
    <h2>Tugas Pra UAS</h2>

	<h3>Edit Data Laptop</h3>

	<a href="/tugasprauas" class="btn btn-success"> ← Kembali</a>

	<br/>
	<br/>

	@foreach($laptop as $l)
	<form action="/tugasprauas/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merklaptop" class="col-sm-2 col-form-label">Merk Laptop</label>
            <input type="hidden" name="kodelaptop" value="{{ $l->kodelaptop}}"> <br/>
            <div class="col-sm-6">
            <input type="text" required="required" id="merklaptop"  name="merklaptop" class="form-control" value="{{ $l->merklaptop }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocklaptop" class="col-sm-2 col-form-label">Stock Laptop</label>
            <div class="col-sm-6">
            <input type="number" required="required" id="stocklaptop"  name="stocklaptop" class="form-control" value="{{ $l->stocklaptop }}">
            </div>
        </div>
        <div class = "form-group d-flex flex-row">
            <label for = "tersedia" class = "control-label">Ketersedian barang</label>
            <input class="col-sm-1 ml-4"  name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
