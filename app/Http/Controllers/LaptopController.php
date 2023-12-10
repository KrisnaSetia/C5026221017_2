<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $laptop = DB::table('laptop')->paginate(15);


    	// mengirim data pegawai ke view index
		return view('indexlaptop',['laptop' => $laptop]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahlaptop');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('laptop')->insert([
			'kodelaptop' => $request->kodelaptop,
			'merklaptop' => $request->merklaptop,
			'stocklaptop' => $request->stocklaptop,
			'tersedia' => $request->has('is_checked') ? 'y' : 'n'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tugasprauas');

	}

	// method untuk edit data laptop
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editlaptop',['laptop' => $laptop]);

	}
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('laptop')->where('kodelaptop',$request->kodelaptop)->update([
			'merklaptop' => $request->merklaptop,
			'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tugasprauas');
	}
    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('viewlaptop',['laptop' => $laptop]);

	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('laptop')->where('kodelaptop',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/tugasprauas');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$laptop = DB::table('laptop')
		->where('merklaptop','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexlaptop',['laptop' => $laptop,'cari'=>$cari]);

	}
}
