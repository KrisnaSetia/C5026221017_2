@extends('master2')
@section('judulhalaman', 'Tugas Pra UAS')

@section('konten')
<h2>Tugas Pra UAS</h2>
<h3>Informasi Laptop</h3>

<a href="/tugasprauas" class="btn btn-success"><- Kembali</a>

    <br />
    <br />



    <div class="row">
        <div class="col-6 border"></div>
        <div class="col-6">
            @foreach ($laptop as $l)
            <fieldset disabled>
                <form action="/tugasprauas/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodelaptop" value="{{ $l->kodelaptop }}">
                    <div class = "form-group">
                        <label for = "merklaptop" class = "col-sm-3 control-label">Merk Laptop</label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="merklaptop" value="{{ $l->merklaptop }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "stocklaptop" class = "col-sm-3 control-label">Stock Laptop</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="stocklaptop" value="{{ $l->stocklaptop }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "tersedia" class = "ml-4 control-label">Ketersedian barang</label>
                        <input class="col-1"  required="required" type = "checkbox" id = "tersedia"  name="is_checked" {{ $l->tersedia == 'y' ? 'checked' : '' }}>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:420px">
                <a href="/tugasprauas" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
