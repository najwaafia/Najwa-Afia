@extends('index')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Pemesanan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pemesanan</li>
                </ol>
            </div>
        </div>
        <div>

            <a href="/admin/tambah"> + Tambah Data Pemesanan</a>
                    
            <br/>
            <br/>
            <table border="1">
                <tr>
                    <th>Kode Pemesanan</th>
                    <th>Kode Tiket</th>
                    <th>Tujuan</th>
                    <th>Jenis</th>
                    <th>Keberangkatan</th>
                    <th>Edit</th>
                </tr>
                @foreach($pemesanan as $p)
                <tr>
                    <td>{{ $p->kode_pemesanan }}</td>
                    <td>{{ $p->kode_tiket }}</td>
                    <td>{{ $p->tujuan }}</td>
                    <td>{{ $p->jenis }}</td>
                    <td>{{ $p->keberangkatan }}</td>
                    <td>
                        <a href="/admin/edit/{{ $p->id_pemesanan }}">Edit</a>
                        |
                        <a href="/admin/hapus/{{ $p->id_pemesanan }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </table>
            </div>

    </div>
</div>
@endsection