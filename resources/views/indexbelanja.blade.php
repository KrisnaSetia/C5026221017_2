@extends('master2')
@section('judulhalaman','Keranjang Belanja')
@section('konten')

	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja/tambahbelanja" class="btn btn-primary"> + Beli</a>
    <br>
    <br>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $n)
		<tr>
			<td>{{ $n->id}}</td>
			<td>{{ $n->kodebarang }}</td>
			<td>{{ $n->jumlah }}</td>
			<td>{{ number_format($n->harga,2,',','.') }}</td>
            <td>
                {{ number_format($n->jumlah * $n->harga,2,',','.')}}
            </td>
            <td>
                <a href="/keranjangbelanja/hapus/{{ $n->id }}" class="btn btn-danger">Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>
@endsection
