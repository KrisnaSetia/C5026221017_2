@extends('master2')
@section('judulhalaman','Data Pegawai')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-success"> ← Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="col-sm-6">
            <input type="text" required="required" id="nama"  name="nama" class="form-control" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-6">
            <input type="text" required="required" id="jabatan"  name="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-6">
            <input type="number" required="required" id="umur"  name="umur" class="form-control" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
            <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
