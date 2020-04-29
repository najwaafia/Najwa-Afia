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

            <a href="/tiket/tambah"> + Tambah Data Tiket</a>
                    
            <br/>
            <br/>
            <table border="1">
                <tr>
                    <th>Kode Tiket</th>
                    <th>Tujuan</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Edit</th>
                </tr>
                @foreach($tiket as $p)
                <tr>
                    <td>{{ $p->kode_tiket }}</td>
                    <td>{{ $p->tujuan }}</td>
                    <td>{{ $p->jenis }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>
                        <a href="/tiket/edit/{{ $p->id_tiket }}">Edit</a>
                        |
                        <a href="/tiket/hapus/{{ $p->id_tiket }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </table>
            </div>

    </div>
</div>
@endsection