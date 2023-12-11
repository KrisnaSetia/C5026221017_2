@extends('master3')
@section('judulhalaman','EAS 5026221017')
@section('konten')

	<h3>Evaluasi Akhir Semester</h3>

    <br/>

    <form  method="GET" action="/combo/index">
        <label for="kategori">Pilih Kategori </label>
        <br>
        <select name="kategori" class="form-select" aria-label="Default select example">">
            @foreach ($kategori as $k )
            <option value="{{$k->id}}">{{$k->nama}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <div style="width:420px">
            <a href="/combo/view/{{$k->id}}" class="btn btn-primary">Kirim</a>
        </div>
    </form>

@endsection
