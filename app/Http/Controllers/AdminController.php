<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pemesanan
    	$pemesanan = DB::table('pemesanan')->get();
 
    	// mengirim data pemesanan ke view index
    	return view('admin',['pemesanan' => $pemesanan]);
     }


    public function tambah()
	{
    	$pemesanan = DB::table('pemesanan')->get();
		return view('tambah',['pemesanan' => $pemesanan]);	 
	}

	public function store(Request $request)
	{
		DB::table('pemesanan')->insert([
			'kode_pemesanan' => $request->kode_pemesanan,
			'kode_tiket' => $request->kode_tiket,
			'tujuan' => $request->tujuan,
			'jenis' => $request->jenis,
			'keberangkatan' => $request->keberangkatan
		]);
		return redirect('/admin');
	 
	}

	public function edit($id)
	{
		// mengambil data pemesanan berdasarkan id yang dipilih
		$pemesanan = DB::table('pemesanan')->where('id_pemesanan',$id)->get();
		// passing data pemesanan yang didapat ke view edit.blade.php
		return view('edit',['pemesanan' => $pemesanan]);
	 
	}

	public function update(Request $request)
	{
		DB::table('pemesanan')->where('id_pemesanan',$request->id)->update([
			'kode_pemesanan' => $request->kode_pemesanan,
			'kode_tiket' => $request->kode_tiket,
			'tujuan' => $request->tujuan,
			'jenis' => $request->jenis,
			'keberangkatan' => $request->keberangkatan
		]);
		return redirect('/admin');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		DB::table('pemesanan')->where('id_pemesanan',$id)->delete();
		return redirect('/admin');
	}

	
}
