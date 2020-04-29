@extends('index')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Pesanan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pesanan</li>
                </ol>
            </div>
        </div>
        <div>
            <h3>Edit Data</h3>
            <a href="/admin"> Kembali</a>            
            <br/><br/>
            @foreach($pemesanan as $p)
            <form action="/admin/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->id_pemesanan }}"> <br/>
                Kode Pemesanan <input type="text" name="kode_pemesanan" required="required"> <br/>
                Kode Tiket <input type="text" name="kode_tiket" required="required"> <br/>
                Tujuan <input type="text" name="tujuan" required="required"> <br/>
                Jenis <input type="text" name="jenis" required="required"> <br/>
                Keberangkatan <input type="date" name="keberangkatan" required="required"> <br/>
                <input type="submit" value="Simpan Data">
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection