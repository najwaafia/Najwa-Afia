@extends('index')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Tiket</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Tiket</li>
                </ol>
            </div>
        </div>
        <div>
            <h3>Tambah Data</h3>
            <a href="/tiket"> Kembali</a>        
            <br/><br/>
            @foreach($tiket as $p)
            <form action="/tiket/store2" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->id_tiket }}"> <br/>
                Kode Tiket <input type="text" name="kode_tiket" required="required"> <br/>
                Tujuan <input type="text" name="tujuan" required="required"> <br/>
                Jenis <input type="text" name="jenis" required="required"> <br/>
                Harga <input type="number" name="harga" required="required"> <br/>
                Stok <input type="number" name="stok" required="required"> <br/>
                <input type="submit" value="Simpan Data">
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection