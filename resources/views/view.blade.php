@extends('master2')
@section('judulhalaman','Data Pegawai')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Informasi Pegawai</h3>

	<a href="/pegawai" class="btn btn-success"> ← Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 border" style="min-height: 50px; min-width: 50px; padding: 10px;">
                <div class="row-lg-2 border" style="min-height: 12rem; min-width: 50px; padding: 10px;">
                </div>
            </div>
            <div class="col-lg-6 border">
        <div class="form-horizontal">
            <div class="row pl-2">
                <label for="nama" class="col-xs-3 col-form-label mr-2">Nama :  {{ $p->pegawai_nama }}</label>
            </div>
            <div class="row pl-2">
                <label for="jabatan" class="col-xs-3 col-form-label">Jabatan : {{ $p->pegawai_jabatan }}</label>
            </div>
            <div class="row pl-2">
                <label for="umur" class="col-xs-3 col-form-label mr-3">Umur : {{ $p->pegawai_umur }}</label>
            </div>
            <div class="row pl-2">
                <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat : {{ $p->pegawai_alamat }}</label>
            </div>
            <div class="row pt-2 pl-2">
            <a href="/pegawai" class="btn btn-primary">OK</a>
            </div>
        </div>
            </div>
        </div>
    </div>

	@endforeach
@endsection
