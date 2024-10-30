@extends('layouts.master');
@section('title','penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/{{ $penjualan->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="no"
                                    value="{{ $penjualan->no }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Customer</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama_customer"
                                    value="{{ $penjualan->nama_customer }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Total</label>
                                <input
                                    type="stok"
                                    class="form-control"
                                    name="total"
                                    value="{{ $penjualan->total }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Transaksi</label>
                                <input
                                    type="date"
                                    class="form-control"
                                    name="tanggal_transaksi"
                                    value="{{ $penjualan->tanggal_transaksi }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection