@extends('master2')
@section('judulhalaman','Data Nilai')
@section('konten')

	<h3>Data Nilai Mahasiswa</h3>

	<a href="/nilaikuliah/tambahnilai" class="btn btn-primary"> + Tambah Nilai Mahasiswa</a>
    <br>
    <br>


	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->id}}</td>
			<td>{{ $n->nrp }}</td>
			<td>{{ $n->nilai_angka }}</td>
			<td>{{ $n->sks }}</td>
            <td>
                @if ($n->nilai_angka <= 40)
                D
                @elseif (41 <= $n->nilai_angka && $n->nilai_angka <=60)
                C
                @elseif (61 <= $n->nilai_angka && $n->nilai_angka  <=80)
                B
                @elseif ($n->nilai_angka >= 80)
                A
                @else
                Invalid
                @endif
            </td>
            <td>
                {{$n->nilai_angka * $n->sks}}
            </td>
		</tr>
		@endforeach
	</table>
@endsection
