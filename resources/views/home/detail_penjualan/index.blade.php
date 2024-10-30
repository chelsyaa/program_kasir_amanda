@extends('layouts.master');
@section('title','detail_penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Detail Penjualan dari ID : {{$id_penjualan}}</h3>
                            <a class="btn btn-primary"  href="/detail_penjualan/{{$id_penjualan}}/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Menu</th>
                                            <th scope="col">harga</th>
                                            <th scope="col">qty</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detail_penjualan as $detail_penjualan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $detail_penjualan->id_menu}}</td>
                                            <td>{{ $detail_penjualan->harga }}</td>
                                            <td>{{ $detail_penjualan->qty }}</td>
                                            <td>{{ $detail_penjualan->subtotal }}</td>
                                            <td>
                                                <a class="btn btn-danger" href="/detail_penjualan/{{ $detail_penjualan->id }}/delete"
                                                    onclick="return confirm('Yakin mau di hapus?')">Delete</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection