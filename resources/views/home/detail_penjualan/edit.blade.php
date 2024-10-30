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
                            <h3>Halaman Edit Data Detail penjualan</h3>
                            <a class="btn btn-warning" href="/detail_penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/detail_penjualan/{{ $detail_penjualan->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="no"
                                    value="{{ $detail_penjualan->no }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ID Menu</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="id_menu"
                                    value="{{ $detail_penjualan->id_menu }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="harga"
                                    value="{{ $detail_penjualan->harga }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Qty</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="qty"
                                    value="{{ $detail_penjualan->qty }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">SubTotal</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="subtotal"
                                    value="{{ $detail_penjualan->subtotal }}"
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