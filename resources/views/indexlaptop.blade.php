@extends('master2')
@section('judulhalaman','Tugas Pra UAS')
@section('konten')

    <h2>Tugas Pra UAS</h2>
	<h3>Data Laptop</h3>

	<a href="/tugasprauas/tambahlaptop" class="btn btn-primary"> + Tambah Data Laptop</a>

	<br/>
    <p>Cari Data Laptop :</p>
	<form action="/tugasprauas/cari" method="GET">
		<input class="form-control"  type="text" name="cari" placeholder="Cari Merk Laptop .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th class="text-center">Kode Laptop</th>
			<th class="text-center">Merk Laptop</th>
			<th class="text-center">Stock Laptop</th>
			<th class="text-center">Tersedia</th>
            <th class="text-center">Opsi</th>
		</tr>
		@foreach($laptop as $l)
		<tr>
			<td class="text-center">{{ $l->kodelaptop }}</td>
			<td class="text-center">{{ $l->merklaptop }}</td>
			<td class="text-center">{{ $l->stocklaptop }}</td>
            <td class="text-center">
                <input type="checkbox" name="is_checked" {{ $l->tersedia == 'y' ? 'checked' : '' }}>
            </td>
			<td class="text-center">
                <a href="/tugasprauas/view/{{ $l->kodelaptop }}" class="btn btn-success">View</a>
				|
				<a href="/tugasprauas/edit/{{ $l->kodelaptop }}" class="btn btn-warning">Edit</a>
				|
				<a href="/tugasprauas/hapus/{{ $l->kodelaptop }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$laptop->links()}}
@endsection
