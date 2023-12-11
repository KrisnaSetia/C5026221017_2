@extends('master3')
@section('judulhalaman','EAS 5026221017')
@section('konten')

<h3>Anda telah memilih kategori dengan Kode: {{ $kategori->id }}</h3>
<a href="/combo"> Kembali</a>
@endsection
