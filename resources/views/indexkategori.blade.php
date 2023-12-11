@extends('master3')
@section('judulhalaman','EAS 5026221017')
@section('konten')


<div class="col-8">
        <h3>Evaluasi Akhir Semester</h3>
        <form action="/kategori/hasil" method="post" class="form-horizontal">
            {{ csrf_field() }}

        <label for="kategori"></label>
        <select name="kategori" id="kategori" size="1" style="width: 300px;">            >
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    <br>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">KIRIM</button>
    </form>

@endsection
