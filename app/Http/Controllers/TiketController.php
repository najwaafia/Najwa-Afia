<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tiket
    	$tiket = DB::table('tiket')->get();
 
    	// mengirim data tiket ke view index
    	return view('tiket',['tiket' => $tiket]);
     }


    public function tambah()
	{
    	$tiket = DB::table('tiket')->get();
		return view('tambah2',['tiket' => $tiket]);	 
	}

	public function store(Request $request)
	{
		DB::table('tiket')->insert([
			'kode_tiket' => $request->kode_tiket,
			'tujuan' => $request->tujuan,
			'jenis' => $request->jenis,
			'harga' => $request->harga,
			'stok' => $request->stok
		]);
		return redirect('/tiket');
	 
	}

	public function edit($id)
	{
		// mengambil data tiket berdasarkan id yang dipilih
		$tiket = DB::table('tiket')->where('id_tiket',$id)->get();
		// passing data tiket yang didapat ke view edit.blade.php
		return view('edit2',['tiket' => $tiket]);
	 
	}

	public function update(Request $request)
	{
		DB::table('tiket')->where('id_tiket',$request->id)->update([
			'kode_tiket' => $request->kode_tiket,
			'tujuan' => $request->tujuan,
			'jenis' => $request->jenis,
			'harga' => $request->harga,
			'stok' => $request->stok
		]);
		return redirect('/tiket');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		DB::table('tiket')->where('id_tiket',$id)->delete();
		return redirect('/tiket');
	}

	
}
